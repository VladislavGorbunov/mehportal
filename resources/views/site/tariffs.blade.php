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
    </style>
    <div class="alert alert-primary px-3 py-4">
        <h2 class="fs-5 text-center mb-1">Бесплатный «Premium» статус для всех новых пользователей!</h2>
        <p class="text-center">Срок проведения акции до 31.12.2025 года.</p>
        <p class="text-center">Для того чтобы получить Premium-статус вам нужно всего лишь зарегистрироваться у нас на сайте.
            <br>Статус будет активирован автоматически и будет действовать до 31 декабря 2025 года включительно.
            После окончания действия бесплатного периода, Вы всегда сможете активировать его платно в личном кабинете, по тарифам указанным ниже.
        </p>
    </div>
    <x-site.tariffs-executor />
    <hr>
    <x-site.tariffs-customer />
    
@endsection