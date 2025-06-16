<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\addOrderRequest;
use App\Models\CategoryService;
use App\Models\Order;
use App\Models\OrderService;
use Illuminate\Support\Facades\Auth;

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
        ]);

        foreach ($validated['categories'] as $key => $category) {
            OrderService::create([
                'service_id' => $category,
                'order_id'   => $order->id,
            ]);
        }

        return redirect()->route('my-orders');

    }
}
