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

    <h2 class="fs-4 text-center mb-4">Для исполнителей</h2>
    <hr>
    <div class="row mt-4">
        <div class="col-12 col-md-3">
            <div class="col-12 border rounded p-3">
                <p class="text-center fs-5 mb-2 tariff-title">Базовый</p>
                <p class="text-center">Бессрочно</p>
                <h4 class="text-center mb-1 fs-5">0 рублей</h4>
                <p class="text-center">Бесплатно</p><hr>
                <p class="text-center">Бесплатное размещение вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Контакты заказчиков скрыты.</p><hr>
                <p class="text-center"><b>Тариф по умолчанию</b></p>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="col-12 border rounded p-3">
                <p class="text-center fs-5 mb-2 tariff-title">Профессионал</p>
                <p class="text-center">на 1 месяц</p>
                <h4 class="text-center mb-1 fs-5">4500 рублей</h4>
                <p class="text-center">4500 рублей/месяц</p><hr>
                <p class="text-center">Бесплатное размещение вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Приоритетное ранжирование вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Бейдж для карточки предприятия «Профессиональный исполнитель»</p><hr>
                <p class="text-center">Доступ к контактам всех заказов.</p><hr>
                <a href="" class="btn btn-tariff d-block mx-auto mt-4">Подключить на 1 месяц</a>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="col-12 border rounded p-3">
                <p class="text-center fs-5 mb-2 tariff-title">Профессионал</p>
                <p class="text-center">на 6 месяцев</p>
                <h4 class="text-center mb-1 fs-5">24000 рублей</h4>
                <p class="text-center">4000 рублей/месяц</p><hr>
                <p class="text-center">Бесплатное размещение вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Приоритетное ранжирование вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Бейдж для карточки предприятия «Профессиональный исполнитель»</p><hr>
                <p class="text-center">Доступ к контактам всех заказов.</p><hr>
                <a href="" class="btn btn-tariff d-block mx-auto mt-4">Подключить на 6 месяцев</a>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="col-12 border rounded p-3">
                <p class="text-center fs-5 mb-2 tariff-title">Профессионал</p>
                <p class="text-center">на 12 месяцев</p>
                <h4 class="text-center mb-1 fs-5">42000 рублей</h4>
                <p class="text-center mt-3"><span class="low-price">3500 рублей/месяц</span></p><hr>
                <p class="text-center">Бесплатное размещение вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Приоритетное ранжирование вашей компании в разделе «Предприятия».</p><hr>
                <p class="text-center">Бейдж для карточки предприятия «Профессиональный исполнитель»</p><hr>
                <p class="text-center">Доступ к контактам всех заказов.</p><hr>
                <a href="" class="btn btn-tariff d-block mx-auto mt-4">Подключить на год</a>
            </div>
        </div>
    </div>
@endsection