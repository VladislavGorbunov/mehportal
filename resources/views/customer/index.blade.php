@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - МЕХПОРТАЛ')
@section('description', 'Панель заказчика - МЕХПОРТАЛ')

@section('content')
        <h2 class="fs-4">Личный кабинет заказчика</h2>
        <x-site.message />
        @if (empty($company->count())) 
                <div class="alert alert-primary text-center mt-3">Добавьте информацию о вашей компании, чтобы получить доступ к размещению заказов.
                        <a href="{{ Route('customer-add-company') }}" class="btn btn-blue mx-2">Добавить компанию</a>
                </div>
        @endif

       
@endsection