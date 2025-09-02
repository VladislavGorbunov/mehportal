<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Order;
use App\Models\ExecutorCompany;
use App\Mail\CustomerRegistration;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    // Главная страница сайта
    public function index() 
    {
        $data['title'] = 'Заказы на металлообработку от заказчиков | Найти исполнителя';
        $data['description'] = 'Платформа для поиска заказов и исполнителей по металлообработке. Размещайте заказы бесплатно, находите подрядчиков по всей России. Для производств и поставщиков.';
        $data['header_title'] = 'Найдите актуальные заказы на металлообработку или проверенного исполнителя ';
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
                'region_slug' => $order->region_slug,
                'quantity' => $order->quantity,
                'price' => $order->price,
                'views' => $order->views,
                'closing_date' => $closing_date,
                'description' => $order->description,
                'services' => Order::find($order->id)->services,
                'active' => $order->active,
                'archive' => $order->archive,
                'customer_premium' => $order->customer_premium,
            ];
        }
        
        $companies = ExecutorCompany::where('active', true)->orderBy('id', 'desc')->limit(5)->get();
        $company_array = [];
        foreach ($companies as $company) {
            
            $region = Region::where('id', $company->region_id)->first();

            $executor = $company->executor;
            
            $company_array[] = [
                'title' => $company->title,
                'legal_form' => $company->legal_form,
                'region_name' => $region->name,
                'inn' => $company->inn,
                'email' => $company->email,
                'phone' => $company->phone,
                'premium' => $executor->premium,
                'created_at' => $company->created_at
            ];
        }
        
        $data['executor_companies'] = $company_array;
        
        $data['orders'] = $orders;

        $data['count_orders'] = Order::countActiveOrdersNoRegion();
        $data['archive_count_orders'] = Order::countArchiveOrdersNoRegion();
        
       
        
        return view('site.index', $data);
    }

    public function cityIndexPage($region_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();
        
        if (! $region) abort(404);
    
        $data['title'] = 'Заказы на металлообработку ' . $region->city_in . ' — заявки ' . date('Y');
        $data['seo_text'] = $region->seo_text;
        $data['description'] = 'Все заказы на металлообработку в открытом доступе '. $region->city_in .' от заказчиков на портале - МЕХПОРТАЛ. Размещайте частные заказы на обработку металла бесплатно! Только проверенные заказчики и исполнители.';
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
                'region_slug' => $order->region_slug,
                'quantity' => $order->quantity,
                'price' => $order->price,
                'views' => $order->views,
                'closing_date' => $closing_date,
                'description' => $order->description,
                'services' => Order::find($order->id)->services,
                'active' => $order->active,
                'archive' => $order->archive,
                'customer_premium' => $order->customer_premium,
            ];
        }
        
        $companies = ExecutorCompany::where('active', true)->orderBy('id', 'desc')->limit(5)->get();
        
        foreach ($companies as $company) {
            $region_company = Region::where('id', $company->region_id)->first();
            $executor = $company->executor;
            
            $company_array[] = [
                'title' => $company->title,
                'legal_form' => $company->legal_form,
                'region_name' => $region_company->name,
                'inn' => $company->inn,
                'email' => $company->email,
                'phone' => $company->phone,
                'premium' => $executor->premium,
                'created_at' => $company->created_at
            ];
        }
        
        $data['executor_companies'] = $company_array;
        
        $data['orders'] = $orders;
        $data['count_orders'] = Order::countActiveOrders($region->id);
        $data['archive_count_orders'] = Order::countArchiveOrders($region->id);
        return view('site.index-region', $data);
    }
    
    
    public function addOrderPage()
    {
        $data['title'] = 'Разместить заказ на металлообработку бесплатно - «МЕХПОРТАЛ»';
        $data['description'] = 'Ищите исполнителя для выполнения заказа? Разместите заказ на металлообработку на портале «МЕХПОРТАЛ» и получайте выгодные коммерческие предложения от проверенных исполнителей и выбирайте лучшее предложение. 
        Добавление заказа на нашем сайте абсолютно бесплатное!';
        $data['header_title'] = 'Разместить заказ на металлообработку бесплатно';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.add-order', $data);
    }
    
    public function calculator()
    {
        $data['title'] = 'Калькулятор металла – онлайн расчет веса';
        $data['description'] = 'Очень удобный и главное бесплатный калькулятор для расчета веса металла с возможностью для расчета круга/прутка, квадрата, шестигранника, уголка, ленты, двутавра, трубы, листа, швеллера и трубы профильной. Заходите и рассчитывайте!';
        $data['header_title'] = 'Калькулятор металла';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.calculator', $data);
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
        $data['title'] = 'МЕХПОРТАЛ - наши контакты и реквизиты';
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


    public function privacyPolicy()
    {
        $data['title'] = 'Политика конфиденциальности - МехПортал';
        $data['description'] = 'Политика конфиденциальности - МехПортал';
        $data['header_title'] = 'Политика конфиденциальности - МехПортал';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.privacy-policy', $data);
    }
    
    
    public function dogovor()
    {
        $data['title'] = 'Договор-оферта на оказание информационных услуг - МехПортал';
        $data['description'] = 'Договор-оферта на оказание информационных услуг - МехПортал';
        $data['header_title'] = 'Договор-оферта на оказание информационных услуг - МехПортал';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.dogovor', $data);
    }
    
    public function documentsPage()
    {
        $data['title'] = 'Правовые документы - МехПортал';
        $data['description'] = 'Правовые документы - МехПортал';
        $data['header_title'] = 'Правовые документы - МехПортал';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.documents', $data);
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
