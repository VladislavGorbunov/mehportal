@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - моя компания')
@section('description', 'Панель заказчика - моя компания')

@section('content')

    <h2 class="fs-4">Моя компания</h2>
        @if (empty($company)) 
            <div class="alert alert-primary text-center mt-3">Добавьте информацию о вашей компании, чтобы получить доступ к размещению заказов.
                    <a href="{{ Route('customer-add-company') }}" class="btn btn-blue mx-2">Добавить компанию</a>
            </div>
        @else
            <x-customer.company-data-edit :company="$company" :legalForms="$legal_forms" :regions="$regions" />
        @endif

        
@endsection