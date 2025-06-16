<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\Region;

class OrdersController extends Controller
{
    // Заказы по категории 
    public function getOrdersForCategories($category_slug) 
    {
        $data['title'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['description'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        
        $category = CategoryService::where('slug', $category_slug)->first();
        $category_id = $category->id;
        $data['header_title'] = 'Заказы на '. mb_strtolower($category->title_case) .' в открытом доступе по всей России';
        $data['orders'] = Order::getOrdersForCategories($category_id);
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.orders', $data);
    }


    // Заказы по категории в регионе
    public function getOrdersForCategoriesRegion($region_slug, $category_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);
        $category = CategoryService::where('slug', $category_slug)->first();
        $data['title'] = 'Заказы '. mb_strtolower($category->title_case) .' в открытом доступе ' . $region->name_in;
        $data['description'] = 'Заказы '. mb_strtolower($category->title_case) .' в открытом доступе ' . $region->name_in;
        $data['header_title'] = 'Заказы на '. mb_strtolower($category->title_case) .' в открытом доступе ' . $region->name_in;
        
        
        $category_id = $category->id;
    
        $data['orders'] = Order::getOrdersForCategories($category_id);
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;
        return view('site.orders', $data);
    }


    // Заказы по категории услуг
    public function getOrdersForServices($slug) 
    {
        $data['title'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['description'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $service = Service::where('slug', $slug)->first();
        $data['header_title'] = 'Заказы на '. mb_strtolower($service->title) .' в открытом доступе по всей России';

        $data['orders'] = Order::getOrdersForServices($slug);
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.orders', $data);
    }


    // Заказы по категории услуг в регионе
    public function getOrdersForServicesRegion($region_slug, $service_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);

        $service = Service::where('slug', $service_slug)->first();
        
        $data['title'] = 'Заказы '. mb_strtolower($service->title_case) .' в открытом доступе ' . $region->name_in;
        $data['description'] = 'Заказы '. mb_strtolower($service->title_case) .' в открытом доступе ' . $region->name_in;
        $data['header_title'] = 'Заказы на '. mb_strtolower($service->title_case) .' в открытом доступе ' . $region->name_in;
        
        $data['orders'] = Order::getOrdersForServices($service_slug);
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;
        return view('site.orders', $data);
    }

}
