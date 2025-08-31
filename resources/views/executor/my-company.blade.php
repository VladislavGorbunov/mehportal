@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - моя компания')
@section('description', 'Панель исполнителя - моя компания')

@section('content')

    <h2 class="fs-4">Моя компания</h2>
        @if (empty($company)) 
            <div class="alert alert-primary text-center mt-3">Добавьте информацию о вашей компании в наш каталог предприятий.
                    <a href="{{ Route('executor-add-company') }}" class="btn btn-blue mx-2">Добавить компанию</a>
            </div>
        @else
            <x-executor.company-data-edit :company="$company" :legalForms="$legal_forms" :regions="$regions" :categoriesServices="$categories_services" :services="$services_array"/>
        @endif

        
@endsection