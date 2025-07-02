<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Order;

class PagesController extends Controller
{

    // Главная страница сайта
    public function index() 
    {
        $data['title'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['description'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['header_title'] = 'Заказы на металлообработку в открытом доступе по всей России';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        $orders_array = Order::getAllOrders();

        $orders = [];

        foreach ($orders_array as $order) {

            $closing_date = date("d.m.Y", strtotime($order->closing_date));

            $orders[] = [
                'title' => $order->title,
                'order_id' => $order->id,
                'order_image' => $order->order_image,
                'order_archive' => $order->order_archive_file,
                'region_name' => $order->region_name,
                'quantity' => $order->quantity,
                'price' => $order->price,
                'closing_date' => $closing_date,
                'description' => $order->description,
                'services' => Order::find($order->id)->services,
                'active' => $order->active,
                'archive' => $order->archive,
                'customer_premium' => $order->customer_premium,
            ];
        }
        

        $data['orders'] = $orders;

        $data['count_orders'] = Order::where('active', true)->count();
        $data['archive_count_orders'] = Order::where('archive', true)->count();
        return view('site.index', $data);
    }

    public function cityIndexPage($region_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);

        $data['title'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['description'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['header_title'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;

        $orders_array = Order::getAllOrdersRegion($region->id);

        $orders = [];

        foreach ($orders_array as $order) {

            $closing_date = date("d.m.Y", strtotime($order->closing_date));

            $orders[] = [
                'title' => $order->title,
                'order_id' => $order->id,
                'order_image' => $order->order_image,
                'order_archive' => $order->order_archive_file,
                'region_name' => $order->region_name,
                'quantity' => $order->quantity,
                'price' => $order->price,
                'closing_date' => $closing_date,
                'description' => $order->description,
                'services' => Order::find($order->id)->services,
                'active' => $order->active,
                'archive' => $order->archive
            ];
        }
        
        $data['orders'] = $orders;
        $data['count_orders'] = Order::countActiveOrders($region->id);
        $data['archive_count_orders'] = Order::countArchiveOrders($region->id);
        return view('site.index', $data);
    }


    // Страница о компании
    public function about() 
    {
        echo 'about';
    }


    // Страница контактов
    public function contacts() 
    {
        echo 'contacts';
    }

    // Страница тарифов
    public function tariffs() 
    {
        $data['title'] = 'Тарифные планы - МехПортал';
        $data['description'] = 'Тарифные планы на доступ к контакной информации.';
        $data['header_title'] = 'Тарифные планы';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.tariffs', $data);
    }
}
