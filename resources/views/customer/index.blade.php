@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - МЕХПОРТАЛ')
@section('description', 'Панель заказчика - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Личный кабинет заказчика</h2>
        <x-site.message />
        
        <div class="alert alert-primary mt-3">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="mt-1 mb-1">Здравствуйте <b>{{ $customer->name }} {{ $customer->lastname }}</b>!</p>
                    @if (! empty($company))
                        <p class="mt-1 mb-1">Ваша организация: <b>{{ $company->legal_form }} «{{ $company->title }}»</b></p>
                    @endif
                </div>

                <div class="col-12 col-md-6">
                    @if ($customer->premium)
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Premium</b>»</p>
                        <p class="mt-1 mb-1">Тариф активирован до: {{ date('d.m.Y', strtotime($customer->premium_end_date)) }} г.</p>
                    @else
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Базовый</b>» <a href="{{ Route('customer-select-tariff') }}" class="ms-2 font-14">Подключить премиум</a></p>
                    @endif
                </div>
            </div>
        </div>

        @if (empty($company)) 
            <div class="alert alert-warning text-center mt-3">Добавьте информацию о вашей компании, чтобы получить доступ к размещению заказов.
                    <a href="{{ Route('customer-add-company') }}" class="btn btn-dark mx-2">Добавить компанию</a>
            </div>
        @endif

        <a href="{{ Route('add-order') }}" class="btn btn-blue mt-2">Разместить заказ</a>
@endsection