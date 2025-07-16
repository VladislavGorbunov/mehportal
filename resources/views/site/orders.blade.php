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
@endsection