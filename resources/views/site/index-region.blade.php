@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')


    <div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/{{ $region_slug }}"><small>Заказы {{ $region_city_in }}</small></a></li>
        </ol>
    </nav>
</div>

    <x-site.companies />
    <x-site.for-created />
   
    <div class="mt-4">
        <div class="d-md-flex align-items-center">
        
            <div class="flex-grow-1">
                <h2 class="text-center text-md-start mt-0 mb-0">Открытые заказы на сегодня</h2> 
            </div>

            <div class="d-flex flex-row justify-content-end">
                <div class="row gx-3">
                    <div class="col-12 col-md-auto text-center mb-2 mb-md-0">
                        <div class="col-12 count-orders-block">
                            <b>Активных заказов: {{ $count_orders }}</b>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto text-center mb-2 mb-md-0">
                        <div class="col-12 count-archive-orders-block">
                            <b>Заказов в архиве: {{ $archive_count_orders }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if (!empty($orders))
        @foreach ($orders as $order)
            <x-site.order-block :order="$order" :regionSlug="$region_slug"/>
            <div class="mt-4 mb-4">
                <a href="/" class="text-center text-decoration-underline d-block mx-auto">Смотреть заказы по всей России</a>
            </div>
        @endforeach
        
    @else
        <x-site.no-order />
    @endif
    
    <x-site.add-order-banner />
    
    <x-site.latest-companies :companies="$executor_companies"/>
    
    <div class="p-2">
    @if ($seo_text)
        {!! $seo_text !!}
    @else
    <h3 class="text-center mt-4 col-md-8 mx-auto">Найдите открытые заказы на металлообработку от заказчиков {{ $region_city_in }}</h3>
        
    <p class="mt-3">
    Устали от простоя оборудования? Хотите быстро найти новые заказы и увеличить свою прибыль? 
    Наш современный сервис – это ваш ключ к успеху в мире металлообработки! Мы объединяем заказчиков и исполнителей, 
    предлагая удобную платформу для поиска и размещения заказов.
    </p>

    <p class="mt-2">
    Вам больше не нужно тратить время на утомительный поиск клиентов. Просто зарегистрируйтесь на нашем сервисе и получите 
    доступ к актуальным открытым заказам на металлообработку со всей страны. Мы предлагаем широкий спектр возможностей, включая:
    </p>

    <ul>
    <li><strong>Поиск заказов на металлообработку</strong> в соответствии с вашими компетенциями и возможностями.</li>
    <li>Удобный фильтр для отбора проектов по типу обработки, материалу, объему и другим параметрам.</li>
    <li>Прямой контакт с заказчиками и возможность обсуждения деталей заказа.</li>
    <li>Доступ к заказам на металлообработку от заказчиков с подтвержденной репутацией.</li>
    </ul>

    <p class="mt-3">
    Наш сервис – это не просто <strong>портал заказов на металлообработку</strong>, это ваш надежный партнер в бизнесе! Здесь вы можете:
    </p>

    <ul>
    <li>Быстро и легко <a href="/add-order"><strong>разместить заказ на металлообработку</strong></a>. Опишите ваши требования, приложите чертежи и укажите необходимые параметры.</li>
    <li>Получите выгодные предложения от проверенных исполнителей.</li>
    <li>Сэкономить время и ресурсы на поиск и согласование.</li>
    <li>Расширить свою клиентскую базу и выйти на новые рынки.</li>
    </ul>

    <p class="mt-3">
    Не упустите свой шанс! Зарегистрируйтесь на нашем сервисе прямо сейчас и начните зарабатывать на заказах на металлообработку уже сегодня! 
    Мы предлагаем прозрачные условия, выгодные тарифы и качественную поддержку на каждом этапе сотрудничества. 
    Добро пожаловать в мир успешной металлообработки!
    </p>
    @endif
    </div>
@endsection