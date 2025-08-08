<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\Region;
use App\Models\Customer;

class OrdersController extends Controller
{
    // Заказы по категории 
    public function getOrdersForCategories($category_slug)
    {
        $category = CategoryService::where('slug', $category_slug)->first();
        $category_id = $category->id;
        $data['service_description'] = '';
        $data['title'] = 'Заказы на ' . mb_strtolower($category->title_case) . ' в открытом доступе в России';
        $data['description'] = 'Каталог заказов на ' . mb_strtolower($category->title_case) . ' в открытом доступе по всей России. Заказы напрямую от заказчиков. Удобный поиск и ежедневное обновление. Заходите!';
        $data['header_title'] = 'Заказы на ' . mb_strtolower($category->title_case) . ' в открытом доступе по всей России';
        $data['region_name'] = '';
        $data['region_city_in'] = 'в России';
        $data['region_slug'] = '';
        $data['seo_category_name'] = $category->title_case;
        $data['breadcrumb'] = [
            'region' => null,
            'region_slug' => null,
            'category' => $category->title,
        ];

        $orders_array = Order::getOrdersForCategories($category_id);

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

        $data['category'] = $category;
        $data['count_orders'] = Order::countActiveOrdersForCategories($category_id);
        $data['archive_count_orders'] = Order::countArchiveOrdersForCategories($category_id);
        $data['orders'] = $orders;
        $data['paginate'] =  $orders_array;
        return view('site.orders', $data);
    }


    // Заказы по категории в регионе
    public function getOrdersForCategoriesRegion($region_slug, $category_slug)
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);
        $category = CategoryService::where('slug', $category_slug)->first();
        $data['service_description'] = '';
        $data['title'] = 'Заказы на ' . mb_strtolower($category->title_case) . ' в открытом доступе ' . $region->city_in;
        
        $data['description'] = 'Каталог заказов на ' . mb_strtolower($category->title_case) . ' в открытом доступе '.$region->city_in.'. Заказы напрямую от заказчиков. Удобный поиск и ежедневное обновление. Заходите!';
        $data['header_title'] = 'Заказы на ' . mb_strtolower($category->title_case) . ' в открытом доступе ' . $region->city_in;
        $data['seo_category_name'] = $category->title_case;
        $category_id = $category->id;

        $orders_array = Order::getOrdersForCategoriesRegion($category_id, $region->id);
        $data['region_name'] = $region->name;
        $data['region_city_in'] = $region->city_in;
        $data['region_slug'] = $region->slug;

        $data['breadcrumb'] = [
            'region' => $region->name_in,
            'region_slug' => $region->slug,
            'category' => $category->title,
        ];

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
        $data['category'] = $category;
        $data['count_orders'] = Order::countActiveOrdersForCategoriesRegion($category_id, $region->id);
        $data['archive_count_orders'] = Order::countArchiveOrdersForCategoriesRegion($category_id, $region->id);

        $data['orders'] = $orders;
        $data['paginate'] =  $orders_array;

        return view('site.orders', $data);
    }


    // Заказы по категории услуг
    public function getOrdersForServices($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $data['service_description'] = $service->description;
        $data['title'] = 'Заказы на ' . mb_strtolower($service->title_case) . ' в открытом доступе в России';
        $data['description'] = 'Каталог заказов на ' . mb_strtolower($service->title_case) . ' в открытом доступе по всей России. Заказы напрямую от заказчиков. Удобный поиск и ежедневное обновление. Заходите!';
        $data['header_title'] = 'Заказы на ' . mb_strtolower($service->title_case) . ' в открытом доступе по всей России';
        
        $data['category'] = CategoryService::where('id', $service->category_id)->first();
        $data['seo_category_name'] = $service->title_case;
        $orders_array = Order::getOrdersForServices($slug);
        $data['region_name'] = '';
        $data['region_city_in'] = 'в России';
        $data['region_slug'] = '';

        $data['breadcrumb'] = [
            'region' => null,
            'region_slug' => null,
            'category' => $service->title,
        ];

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

        $data['count_orders'] = Order::countActiveOrdersForServices($slug);
        $data['archive_count_orders'] = Order::countArchiveOrdersForServices($slug);
        $data['orders'] = $orders;
        $data['paginate'] =  $orders_array;

        return view('site.orders', $data);
    }


    // Заказы по категории услуг в регионе
    public function getOrdersForServicesRegion($region_slug, $service_slug)
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);

        $service = Service::where('slug', $service_slug)->first();
        $data['service_description'] = '';
        $data['title'] = 'Заказы на ' . mb_strtolower($service->title_case) . ' в открытом доступе ' . $region->city_in;
        $data['description'] = 'Каталог заказов на ' . mb_strtolower($service->title_case) . ' в открытом доступе '.$region->city_in.'. Заказы напрямую от заказчиков. Удобный поиск и ежедневное обновление. Заходите!';
        $data['header_title'] = 'Заказы на ' . mb_strtolower($service->title_case) . ' в открытом доступе ' . $region->city_in;
        $data['seo_category_name'] = $service->title_case;
        $orders_array = Order::getOrdersForServicesRegion($service_slug, $region->id);
        $data['region_name'] = $region->name;
        $data['region_city_in'] = $region->city_in;
        $data['region_slug'] = $region->slug;

        $data['breadcrumb'] = [
            'region' => $region->name_in,
            'region_slug' => $region->slug,
            'category' => $service->title,
        ];

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

        $data['count_orders'] = Order::countActiveOrdersForServicesRegion($service_slug, $region->id);
        $data['archive_count_orders'] = Order::countArchiveOrdersForservicesRegion($service_slug, $region->id);
        $data['category'] = CategoryService::where('id', $service->category_id)->first();
        $data['orders'] = $orders;
        $data['paginate'] =  $orders_array;

        return view('site.orders', $data);
    }


    public function getOrder($order_id)
    {
        $order = Order::getOrder($order_id);

        if (! $order) abort('404');

        $date = date("d.m.Y", strtotime($order->created_at));
        $closing_date = date("d.m.Y", strtotime($order->closing_date));

        // dd($order);

        $order_data = [
            'id' => $order->id,
            'title' => $order->title,
            'order_image' => $order->order_image,
            'order_archive' => $order->order_archive_file,
            'region_name' => $order->region_name,
            'description' => $order->description,
            'date' => $date,
            'closing_date' => $closing_date,
            'quantity' => $order->quantity,
            'price' => $order->price,
            'active' => $order->active,
            'archive' => $order->archive,
            'services' => Order::find($order->id)->services,
            'company_legal_form' => $order->company_legal_form,
            'company_title' => $order->company_title,
            'company_inn' => $order->company_inn,
            'company_phone' => $order->phone,
            'extension_number' => $order->extension_number,
            'company_address' => $order->address,
            'company_email' => $order->email,
            'person' => $order->person,
            'customer_premium' => $order->customer_premium,
            'customer_id' => $order->customer_id,
        ];

        $data['title'] = 'Заказ на металлообработку №' . $order_id . ' от ' . $date . '. ' . $order->title;
        $data['description'] = 'Заказы';
        $data['header_title'] = $order->title;
        $data['region_name'] = '';
        $data['region_slug'] = '';
        $data['order'] = $order_data;
        $data['customerCheck'] = Customer::find($order->customer_id)->customerCheckData;

        return view('site.order', $data);
    }
}
