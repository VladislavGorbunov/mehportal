@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')
    
    <div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>{{ $order['title'] }} - Заказ от {{ $order['date'] }} </small></li>
        </ol>
    </nav>
</div>
    
    <x-site.order.order :order="$order" :regionSlug="$region_slug" :customerCheck="$customerCheck"/>
    
    <div class="col-12 p-5 mt-0 bg-light rounded d-flex flex-column flex-md-row justify-content-around">
        <div>
            <h3 class="mt-0 fs-4 text-center">Нужно найти исполнителя на заказ по металлообработке?</h3>
            <p class="mb-0 text-center">Разместите свой заказ на сайте «МехПортал» и получайте лучшие, выгодные коммерческие предложения от исполнителей!</p>
            <p class="mt-0 text-center">Всем новым заказчикам мы дарим 6 месяцев Premium статуса, который поможет максимально быстро найти исполнителя!</p>
        </div>
        
        <div>
            <a href="/customer/add-order" class="btn btn-blue d-block mx-auto mt-4"><i class="bi bi-folder-plus mx-1"></i> Разместить заказ</a>
        </div>
    </div>
@endsection