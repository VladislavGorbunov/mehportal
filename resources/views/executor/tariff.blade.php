@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - подключение тарифа')
@section('description', 'Панель исполнителя - подключение тарифа')

@section('content')
    <h2 class="fs-4">Подключение тарифа</h2>
        <x-site.message />

        <div class="alert alert-primary mt-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    @if ($executor->premium)
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Premium</b>»</p>
                        <p class="mt-1 mb-1">Тариф активирован до: {{ date('d.m.Y', strtotime($executor->premium_end_date)) }} г.</p>
                        <p class="mt-1 mb-1">У Вас уже подключён Premium тариф. Оставить новую заявку можно после окончания действия тарифа.</p>
                        @else
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Базовый</b>» </p>
                    @endif
                </div>
            </div>
        </div>

        @if (! $executor->premium)
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Выберите тариф:</label>
  					<select class="form-select" name="tariff_months">
                        @foreach ($tariffs as $tariff)
                            <option value="{{ $tariff->months }}">Тариф: {{ $tariff->title }} | Сроком на: {{ $tariff->months }} мес. | Стоимость: {{ $tariff->price }} руб.</option>
                        @endforeach
                    </select>
            </div> 
            <h5 class="fs-5 mt-4">Оплатить картой любого банка:</h5>
            <img src="/images/tbank.png" width="120" class="mt-2">
            <button class="btn btn-blue mt-2">Перейти к оплате</button>

            <h5 class="fs-5 mt-4">Запросить счёт на оплату:</h5>
            @if (! empty($executor->executorCompanies))
            <div class="mb-3 mt-3">
                <label class="form-label">Организация:</label>
                <input class="form-control" type="text" name="title" value="{{ $executor->executorCompanies->legal_form }} {{ $executor->executorCompanies->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ИНН:</label>
                <input class="form-control" type="number" name="inn" value="{{ $executor->executorCompanies->inn }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email на который отправим счёт:</label>
                <input class="form-control" type="email" name="email" >
            </div>
            <button class="btn btn-blue">Запросить счёт</button>
            @else
                <div class="alert alert-danger text-center mt-3">
                    Добавьте компанию. От лица компании будут размещаться заказы на сайте,
                    а так же по реквизитам вашей компании будет выставлен счёт на оплату тарифа.
                    <br>Если у Вас есть вопросы об оплате, пишите нам на почту <b>info@mehportal.ru</b> или в онлайн чат.
                </div>
            @endif
        </form>
        @endif

@endsection
