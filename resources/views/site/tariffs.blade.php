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
    <div class="alert alert-primary px-4 py-4">
        <h2 class="fs-5 text-center mb-1 mt-0">Бесплатный «Premium» статус для всех новых пользователей!</h2>
        <p class="text-center mb-1"><strong>Срок проведения акции до 31.12.2025 года.</strong></p>
        <p class="text-center mt-1 mb-0">Для того чтобы получить Premium-статус вам нужно всего лишь зарегистрироваться у нас на сайте.
            <br>Статус будет активирован автоматически в течени дня и будет действовать 1 месяц.
            После окончания действия бесплатного пробного периода, Вы всегда сможете активировать его платно в личном кабинете, по тарифам указанным ниже.
        </p>
    </div>
    <x-site.tariffs-executor />
    <hr>
    <x-site.tariffs-customer />
    
@endsection