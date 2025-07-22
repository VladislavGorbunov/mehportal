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
        $data['description'] = 'Все заказы на металлообработку в открытом доступе от заказчиков на портале - МЕХПОРТАЛ. Размещайте заказы бесплатно! Только проверенные заказчики и исполнители.';
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

        $data['count_orders'] = Order::countActiveOrdersNoRegion();
        $data['archive_count_orders'] = Order::countArchiveOrdersNoRegion();
        return view('site.index', $data);
    }

    public function cityIndexPage($region_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);
    
        $data['title'] = 'Заказы на металлообработку от заказчиков в открытом доступе ' . $region->city_in;
        
        $data['description'] = 'Все заказы на металлообработку в открытом доступе '. $region->city_in .' от заказчиков на портале - МЕХПОРТАЛ. Размещайте заказы бесплатно! Только проверенные заказчики и исполнители.';
        $data['header_title'] = 'Заказы на металлообработку в открытом доступе ' . $region->city_in;
        $data['region_name'] = $region->name;
        $data['region_city_in'] = $region->city_in;
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
                'archive' => $order->archive,
                'customer_premium' => $order->customer_premium,
            ];
        }
        
        $data['orders'] = $orders;
        $data['count_orders'] = Order::countActiveOrders($region->id);
        $data['archive_count_orders'] = Order::countArchiveOrders($region->id);
        return view('site.index', $data);
    }
    
    
    public function addOrderPage()
    {
        $data['title'] = 'Разместить заказ на металлообработку бесплатно - «МЕХПОРТАЛ»';
        $data['description'] = 'Разместите заказ на металлообработку на портале «МЕХПОРТАЛ» и получайте выгодные предложения от проверенных исполнителей и выбираёте лучшее предложение.';
        $data['header_title'] = 'Разместить заказ на металлообработку бесплатно';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.add-order', $data);
    }


    // Страница о компании
    public function about() 
    {
        $data['title'] = '«МЕХПОРТАЛ» - информация о проекте';
        $data['description'] = '«МЕХПОРТАЛ» - информация о проекте';
        $data['header_title'] = '«МЕХПОРТАЛ» - информация о проекте';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.about', $data);
    }


    // Страница контактов
    public function contacts() 
    {
        $data['title'] = 'МЕХПОРТАЛ - контакты';
        $data['description'] = 'МЕХПОРТАЛ - наши контакты, адреса и реквизиты';
        $data['header_title'] = 'МехПортал - наши контакты, адрес и реквизиты';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.contacts', $data);
    }

    // Страница тарифов
    public function tariffs() 
    {
        $data['title'] = 'Тарифные планы - МехПортал';
        $data['description'] = 'Тарифные планы на доступ к контактной информации заказчиков и исполнителей на портале - МехПортал.';
        $data['header_title'] = 'Тарифные планы';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.tariffs', $data);
    }


    // Главная страница блога
    public function blog()
    {
        $data['title'] = 'МехПортал блог';
        $data['description'] = 'МехПортал блог';
        $data['header_title'] = 'МехПортал блог';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.blog', $data);
    }
}
