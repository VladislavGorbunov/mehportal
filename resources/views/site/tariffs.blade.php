@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')
    <style>
        .tariff-title {
            font-weight: 500;
        }

        .low-price {
            background: rgb(48, 183, 84);
            font-weight: 400;
            padding: 6px 22px;
            border-radius: 5px;
            color: #fff;
        }
        
        .sale-icon {
            position: absolute;
            width: 128px;
            height: 128px;
            top: -30px;
            right: -30px;
            opacity: 0.2;
        }
        
        .alert-primary {
            overflow: hidden;
        }
        
        .btn-primary, .btn-dark {
            border-radius: 14px;
        }
    </style>
    
    <div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Тарифы</small></li>
        </ol>
    </nav>
    </div>
    
    <div class="alert alert-primary px-5 py-5 mb-4">
        <h2 class="fs-4 text-center mb-1 mt-0">Бесплатный «Premium» для всех новых пользователей на 6 месяцев!</h2>
        <p class="text-center mt-3">Количество участников акции ограниченно!</p>
        <p class="text-center mt-3 mb-0">Для того чтобы получить <b>Premium-статус</b> вам нужно всего лишь зарегистрироваться у нас на сайте.
            <br>Статус будет активирован автоматически после регистрации в течени дня.
            После окончания действия бесплатного пробного периода, вы всегда сможете активировать Premium в личном кабинете, по тарифам указанным ниже.
        </p>
        
        <div class="d-flex flex-column flex-md-row mt-4 align-items-center justify-content-center gap-4">
        <a href="/login/customer/" class="btn btn-primary py-3 px-4"><small>Хочу быть Premium заказчиком</small></a>
        <a href="/login/executor/" class="btn btn-dark py-3 px-4"><small>Хочу быть Premium исполнителем</small></a></div>
        
        <p class="text-center mt-4 mb-0">Есть вопросы по тарифам и оплате? Напишите нам на почту: <a href="mailto::info@mehportal.ru">info@mehportal.ru</a> - ответим быстро!</p>
        
        <img src="/images/sale.svg" class="sale-icon">
    </div>
    <x-site.tariffs-executor />
    <hr>
    <x-site.tariffs-customer />
    <hr>
    <h3 class="text-center mt-3">Оплата услуг</h3>
    <p class="text-center mt-3">Мы работаетм с юридическими лицами и ИП. Оплата производится в безналичной форме, переводом денежных средств на наш расчётный счёт.</p>
    
@endsection