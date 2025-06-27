<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\addOrderRequest;
use App\Models\CategoryService;
use App\Models\Order;
use App\Models\OrderService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function addOrder()
    {
        $data['categories_services'] = CategoryService::get();
        return view('customer.add-order', $data);
    }

    public function myOrders()
    {
        $data['orders'] = Order::where('customer_id', Auth::guard('customer')->id())->orderBy('orders.active', 'desc')->get();
        return view('customer.my-orders', $data);
    }

    public function store(addOrderRequest $request)
    {
        $validated = $request->validated();

        if (array_key_exists('order_image_file', $validated)) {
            $order_image_file = $validated['order_image_file'];
        } else {
            $order_image_file = null;
        }

        if (array_key_exists('order_archive_file', $validated)) {
            $order_archive_file = $validated['order_archive_file'];
        } else {
            $order_archive_file = null;
        }

        $order = Order::create([
            "customer_id"        => Auth::guard('customer')->id(),
            "order_image"        => self::uploadPlan($order_image_file),
            "order_archive_file" => self::uploadArchive($order_archive_file),
            "title"              => $validated['title'],
            "quantity"           => $validated['quantity'],
            "price"              => $validated['price'],
            "closing_date"       => $validated['closing_date'],
            "description"        => $validated['description'],
            "active"             => true,
            "archive"            => false,
        ]);

        foreach ($validated['categories'] as $key => $category) {
            OrderService::create([
                'service_id' => $category,
                'order_id'   => $order->id,
            ]);
        }

        $archive_date = $validated['closing_date'] . ' 23:59:59';
        // Добавление события для архивации заказа
        DB::statement("CREATE EVENT archive_order_$order->id
            ON SCHEDULE AT '" . $archive_date . "'
            DO
            UPDATE orders SET active = 0, archive = 1 WHERE orders.id = $order->id;"
        );

        return redirect()->route('my-orders');

    }

    public static function uploadPlan($plan)
    {
        if (empty($plan)) {
            return 'no-image.jpg';
        }

        // Загрузка файла в папку storage/app/public/plans_images
        $upload_file = $plan->store('', 'orders_images');

        $storagePath = storage_path() . '\\app\\public\\' . 'orders_images\\';
        $filePath    = storage_path() . '\\app\\public\\' . 'orders_images\\' . $upload_file;

        // Уменьшение и обрезка изображения
        $image = new \Imagick($filePath);

        $geometry = $image->getImageGeometry();
        if ($geometry['width'] > 1200) {
            $image->resizeImage(1200, 0, 0, 0);
        }

        if ($geometry['height'] > 1000) {
            $image->resizeImage(0, 1000, 0, 0);
        }

        // Перезапись изображения
        $image->writeImage($filePath);

        return $upload_file;
    }

    public function uploadArchive($archive)
    {
        if (! empty($archive)) {
            $upload_file = $archive->store('', 'orders_files');
            return $upload_file;
        } else {
            return '';
        }

    }
}
