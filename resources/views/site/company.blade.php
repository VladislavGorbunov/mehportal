@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
<nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
        <li class="breadcrumb-item"><small>Каталог компаний</small></li>
        
    <li class="breadcrumb-item active" aria-current="page"><small>{{ $company['legal_form'] }} «{{ $company['title'] }}»</small></li>
  </ol>
</nav>
</div>


<div class="mt-4">
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="{{ Storage::disk('executors_logo')->url($company['logo']) }}" class="img-fluid order-image rounded d-block mx-auto" alt="{{ $company['legal_form'] }} «{{ $company['title'] }}»" title="{{ $company['legal_form'] }} «{{ $company['title'] }}»">
            @if ($company->executor->premium || Auth::guard('customer')->user() && Auth::guard('customer')->user()->premium)
                <a href="tel:{{ $company['phone'] }}" class="btn btn-blue w-100 mt-4"><i class="bi bi-telephone"></i> Позвонить</a>
                <a href="mailto:{{ $company['email'] }}" class="btn btn-none-bg-order p-2 w-100 mt-3 mb-5"><i class="bi bi-envelope"></i> Написать на Email</a>
            @endif
        </div>
        
        <div class="col-12 col-md-9">
            <h2 class="mb-4 fs-4">{{ $company['legal_form'] }} «{{ $company['title'] }}»</h2>
            @if ($company->executor->premium)
                <span class="mx-0 premium-executor py-2"><i class="bi bi-fire"></i> Premium исполнитель</span>
            @endif
            
            
            <div class="row mt-4">
            
            @if ($company->executor->premium || Auth::guard('customer')->user() && Auth::guard('customer')->user()->premium)
            <div class="col-12 col-md-6">
                <p><b>ИНН:</b> {{ $company['inn'] }}</p>
                <hr>
                <p><b>Регион:</b> {{ $region['name'] }}</p>
                <hr>
                <p><b>Адрес:</b> {{ $company['address'] }}</p>
                <hr>
                <p><b>Контактное лицо:</b> {{ $company['contact_person'] }}</p>
                <hr>
            </div>
            
            <div class="col-12 col-md-6">
                <p><b>Телефон:</b> <a href="tel:{{ $company['phone'] }}">{{ $company['phone'] }}</a></p>
                <hr>
                <p><b>Email:</b> <a href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a></p>
                <hr>
                <p><b>Сайт:</b> {{ $company['site'] ? $company['site'] : '-' }}</p>
                
                <hr>
            </div>
            @else
            <div class="px-2">
            <div class="alert alert-warning d-flex flex-column flex-md-row align-items-center justify-content-evenly mb-4">
                <p class="m-0 text-center">Контакты этого исполнителя доступны только заказчикам с тарифом «Premium» </p>
                <div class="mt-3 mt-md-0"><a href="{{ Route('customer-select-tariff') }}" class="btn alert-btn px-3" target="_blank">Подключить</a></div>
            </div>
            </div>
            
            
            <div class="col-12 col-md-6">
                <p><b>ИНН:</b> -</p>
                <hr>
                <p><b>Регион:</b> {{ $region['name'] }}</p>
                <hr>
                <p><b>Адрес:</b> -</p>
                <hr>
                <p><b>Контактное лицо:</b> -</p>
                <hr>
            </div>
            
            <div class="col-12 col-md-6">
                <p><b>Телефон:</b> -</p>
                <hr>
                <p><b>Сайт:</b> -</p>
                <hr>
                <p><b>Email:</b> -</p>
                <hr>
            </div>
            
            @endif
            </div>
            <p class="mb-2"><b>Описание компании:</b></p>
            <p>{!! $company['description'] !!}</p>
            <hr>
            
            <p class="mb-2"><b>Парк станков и оборудования для обработки металла:</b></p>
            @if ($company['machines'])
                <p>{!! $company['machines'] !!}</p>
            @else
                <p>Перечень оборудования не указан.</p>
            @endif
            <hr>
            <p><b>Категории оказываемых услуг:</b></p>
            
            <style>
                .categories {
                    position: relative;
                    height: auto;
                    max-height: 210px;
                    overflow: hidden;
                }
                
                .categories:after {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    height: 30px;
                    background: linear-gradient(180deg, transparent, white 50%);
                }
            </style>
            
            
            <div class="categories mb-2">
            <div class="mb-2 mt-2 d-flex flex-wrap">
                @foreach ($services as $service)
                    <div class="services-list me-2 mb-2 d-flex align-items-center"><a href="/companies/service/{{ $service['slug'] }}">{{ $service['title'] }}</a></div>
                @endforeach
            </div>
            </div>
            <button class="show btn text-primary mt-1 px-4 mb-2"><small>Показать все</small></button>
            <hr>
            <script>
                let catBlock = document.querySelector('.categories')
                let btnShow = document.querySelector('.show')
                btnShow.addEventListener('click', () => {
                    catBlock.style.maxHeight = '100%'
                    catBlock.style.height = 'auto'
                    btnShow.style.display = 'none'
                })
            </script>
        </div>
    
    </div>
</div>

<div class="col-12 p-5 mt-3 bg-light rounded d-flex flex-column flex-md-row justify-content-around">
        <div>
            <h3 class="mt-0 fs-4 text-center">Вы производитель работ по металлообработке?</h3>
            <p class="mb-0 text-center">Разместите свою компанию на сайте «МехПортал» и получайте больше заявок на металлообработку от заказчиков!</p>
            <p class="mt-0 text-center">Всем новым предприятиям мы дарим 6 месяцев Premium статуса, который поможет максимально быстро найти заказы!</p>
        </div>
        
        <div>
            <a href="/executor/add-company" class="btn btn-blue d-block mx-auto mt-4"><i class="bi bi-folder-plus mx-1"></i> Добавить компанию</a>
        </div>
    </div>

@endsection