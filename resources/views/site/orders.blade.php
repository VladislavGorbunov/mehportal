@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
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

    <div class="d-none d-md-block">
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    @if ($breadcrumb['region'])
    <li class="breadcrumb-item"><a href="/{{ $breadcrumb['region_slug'] }}">Каталог заказов {{ $breadcrumb['region'] }}</a></li>
    @else 
    <li class="breadcrumb-item">Каталог заказов</li>
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['category'] }}</li>
  </ol>
</nav>
</div>

    @if (! empty($category))
    <div class="mb-3 mt-2 d-flex justify-content-center flex-wrap">
        @foreach ($category->servicesAll as $service)
            @if ($region_slug !== '')
                <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="/{{ $region_slug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
            @else
                <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="{{ $region_slug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
            @endif
        @endforeach
    </div>
    @endif


    @if (!empty($orders))
        @foreach ($orders as $order)
            <x-site.order-block :order="$order" :regionSlug="$region_slug"/>
        @endforeach   
        <x-site.add-order-banner />
    @else
        <x-site.no-order />
    @endif


    {{ $paginate->links() }}
    
    <div class="mt-4 mb-3">
        @if ($service_description)
            {!! $service_description !!}
        @else
        <h3 class="text-center col-12 col-md-7 mx-auto">Надежный партнер на {{ mb_strtolower($seo_category_name) }} {{ $region_city_in }}</h3>
        
        <p>
            Устали от бесконечных поисков надежных исполнителей для ваших заказов на {{ mb_strtolower($seo_category_name) }}? Хотите получать действительно выгодные предложения, которые не ударят по бюджету? А может быть, вы – производитель, который ищет стабильный поток заказов и хочет максимально загрузить свои мощности?
        </p>

        <p>Наш сайт – это уникальная платформа, созданная специально для того, чтобы соединить тех, кто нуждается в качественной металлообработке, 
        с теми, кто готов ее предоставить на высочайшем уровне. Мы – ваш мост к эффективному и взаимовыгодному сотрудничеству.</p>
        
        <h4 class="fs-5 mt-3">Для заказчиков:</h4>
        <ul>
        <li>Найдите проверенных исполнителей: Забудьте о рисках и сомнениях! На нашей платформе вы найдете только ответственных и опытных подрядчиков, чья репутация подтверждена реальными отзывами и успешными проектами. Мы тщательно отбираем участников, чтобы вы могли быть уверены в качестве выполнения работ.</li>
        <li>Получайте лучшие коммерческие предложения: <a href="/add-order">Разместите свой заказ</a>, опишите свои требования, и лучшие исполнители сами предложат вам свои условия. Вы сможете сравнить цены, сроки и условия, выбрав наиболее выгодный для вас вариант. Больше никаких долгих переговоров и поиска компромиссов – выгодные предложения приходят к вам!</li>
        <li>Экономьте время и ресурсы: Мы автоматизируем процесс поиска и подбора, позволяя вам сосредоточиться на главном – реализации ваших проектов. Всего несколько кликов – и вы на пути к успешному сотрудничеству.</li>
        </ul>

        <h4 class="fs-5 mt-3">Для исполнителей:</h4>
        <ul>
        <li>Легко находите новые <strong>заказы на {{ mb_strtolower($seo_category_name) }}</strong>: Ваше производство готово к новым вызовам? На нашей платформе вы найдете широкий спектр заказов на металлообработку, соответствующих вашим возможностям и специализации. Мы помогаем вам расширить клиентскую базу и увеличить загрузку вашего оборудования.</li>
        <li>Предлагайте свои услуги напрямую: Получайте запросы от потенциальных заказчиков и предлагайте им свои лучшие условия. Вы сами определяете, с кем и на каких условиях работать, строя долгосрочные и плодотворные отношения.</li>
        <li>Развивайте свой бизнес: Наша платформа – это не просто место для поиска заказов, это возможность для роста и развития вашего производственного бизнеса. Получайте обратную связь, повышайте свою узнаваемость и становитесь лидером в своей нише.</li>
        </ul>
        
        <p class="text-center">
            Независимо от того, ищете ли вы надежного партнера для реализации своих идей или стремитесь расширить горизонты своего производства, наш сайт – это именно то, что вам нужно. Мы создали пространство, где качество встречается с выгодой, а возможности – с реальными результатами.
        </p>
        @endif

    </div>
@endsection