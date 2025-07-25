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
        $data['description_text'] = '
        <h2 class="text-center mt-4">Сервис поиска открытых заказов на металлообработку</h2>
        <p class="mt-2"><strong>MehPortal.ru</strong> — это современная онлайн-платформа, созданная специально для владельцев производств и заказчиков металлоконструкций, деталей и комплектующих. 
        Она объединяет представителей отрасли в единую сеть, обеспечивая быстрый и удобный доступ к свежим заказам и готовым предложениям.</p>
        
        <p class="mt-3 mb-1"><strong>Ключевые особенности сервиса:</strong></p>
        <ul>
            <li>Простота использования: Легкий и интуитивно понятный интерфейс позволяет мгновенно искать и размещать заказы.</li>
            <li>Широкий охват: Открытая база включает запросы от различных регионов России, облегчая поиск новых контрактов.</li>
            <li>Фильтрация запросов: Гибкая система фильтров помогает быстро найти подходящий заказ, ориентируясь на тип обработки, объем, материалы и технические характеристики.</li>
            <li>Прямой контакт с клиентами: Заказчики и производители взаимодействуют напрямую, минуя посредников.</li>
            <li>Проверенные партнеры: Все участники проходят проверку надежности, снижая риски мошенничества и недобросовестных действий.</li>
        </ul>
        
        <p class="mt-3 mb-1"><strong>Преимущества для пользователей:</strong></p>
        <ul>
            <li>Простота регистрации и мгновенный доступ к актуальной базе заказов.</li>
            <li>Постоянное пополнение новых заданий с описанием требований и возможных объемов производства.</li>
            <li>Подробная фильтрация заказов по необходимым критериям (тип обработки, регион, объемы и др.).</li>
            <li>Возможность установить прямой контакт с потенциальными партнерами и обсудить важные аспекты заказа.</li>
            <li>Гарантия безопасности благодаря верифицированным участникам площадки.</li>
        </ul>
        
        <p class="mt-3 mb-1"><strong>Как начать работу на портале?</strong></p>
        
        <ol>
            <li>Зарегистрироваться: Заполнить простую форму и подтвердить учетную запись.</li>
            <li>Настроить профиль: Добавить информацию о своем предприятии, оборудовании и предлагаемых услугах.</li>
            <li>Искать заказы: Воспользоваться системой фильтров для поиска идеального задания.</li>
            <li>Связываться с заказчиками: Отправлять предложения и обсуждать условия.</li>
            <li>Получать выгоды: Повышать доходы и загрузку производственных мощностей.</li>
        </ol>
        
        <p class="mt-3">Благодаря простоте интерфейса и прозрачности процедур, пользователи получают быстрые и качественные коммерческие предложения. Важно отметить, что весь процесс проходит без комиссий и скрытых платежей, делая сотрудничество выгодным для обеих сторон.</p>
        ';
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
