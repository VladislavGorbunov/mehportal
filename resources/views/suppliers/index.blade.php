@extends('layouts.suppliers-panel')

@section('title', 'Кабинет поставщика - МЕХПОРТАЛ')
@section('description', 'Кабинет поставщика - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Личный кабинет поставщика</h2>
        <x-site.message />
        
        <div class="alert alert-primary mt-3">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="mt-1 mb-1">Здравствуйте <b>{{ $supplier->name }} {{ $supplier->lastname }}</b>!</p>
                    @if (! empty($company))
                        <p class="mt-1 mb-1">Ваша организация: <b>{{ $company->legal_form }} «{{ $company->title }}»</b></p>
                    @endif
                </div>

                <div class="col-12 col-md-6">
                    @if ($supplier->premium)
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Premium</b>»</p>
                        <p class="mt-1 mb-1">Тариф активирован до: {{ date('d.m.Y', strtotime($executor->premium_end_date)) }} г.</p>
                    @else
                        <p class="mt-1 mb-1">Ваш тариф: «<b>Базовый</b>» <a href="{{ Route('executor-select-tariff') }}" class="ms-2 font-14">Подключить премиум</a></p>
                    @endif
                </div>
            </div>
        </div>
        
        @if (empty($company)) 
            <div class="alert alert-warning text-center mt-3 p-4"><b class="fs-5">Добавьте информацию о вашей компании.</b><br> 
            <p class="mb-3 mt-2">После этого иформация о Вашей компании будет размещена в каталоге поставщиков и видна всем посетителям сайта.</p>
            <a href="{{ Route('executor-add-company') }}" class="btn btn-blue mx-2">Добавить компанию</a>
            </div>
        @endif
@endsection