@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - МЕХПОРТАЛ')
@section('description', 'Панель заказчика - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Коммерческое предложение от {{ $offer->company_name }}</h2>
        <x-site.message />
        
        <div class="mt-4">
            <p>ИНН: {{ $offer->company_inn }}</p>
            <p>Регион компании: {{ $offer->company_region }}</p>
            <p>Дата отправки КП: {{ date('d.m.Y', strtotime($offer->created_at)) }} г.</p>
            <p>Контактное лицо: {{ $offer->contact_person }}</p>
            <p>Телефон: {{ $offer->contact_phone }}</p>
            <p>Email: {{ $offer->contact_email }}</p>
            <hr>
            <p class="mb-1"><b>Текст коммерческого предложения:</b></p>
            <p class="mt-1">{{ $offer->cp_text }}</p>
        </div>

@endsection