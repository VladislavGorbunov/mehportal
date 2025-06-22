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
        $data['orders'] = Order::where('customer_id', Auth::guard('customer')->id())->get();
        return view('customer.my-orders', $data);
    }

    public function store(addOrderRequest $request)
    {
        $validated = $request->validated();
  
        $order = Order::create([
            "customer_id"  => Auth::guard('customer')->id(),
            "title"        => $validated['title'],
            "quantity"     => $validated['quantity'],
            "price"        => $validated['price'],
            "closing_date" => $validated['closing_date'],
            "description"  => $validated['description'],
            "active"       => true,
            "archive"      => false,
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
            ON SCHEDULE AT '".$archive_date."'
            DO
            UPDATE orders SET active = 0, archive = 1 WHERE orders.id = $order->id;"
        );

        return redirect()->route('my-orders');

    }
}
