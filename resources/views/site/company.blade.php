@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="{{ Storage::disk('executors_logo')->url($company['logo']) }}" class="img-fluid order-image d-block mx-auto">
            <a href="tel:{{ $company['phone'] }}" class="btn btn-blue w-100 mt-4"><i class="bi bi-telephone"></i> Позвонить</a>
            <a href="mailto:{{ $company['email'] }}" class="btn btn-none-bg-order p-2 w-100 mt-3 mb-5"><i class="bi bi-envelope"></i> Написать на Email</a>
        </div>
        
        <div class="col-12 col-md-9">
            <h2 class="mb-3">{{ $company['legal_form'] }} «{{ $company['title'] }}»</h2>
            <p>ИНН: {{ $company['inn'] }}</p>
            <p>Регион: {{ $region['name'] }}</p>
            <p>Адрес: {{ $company['address'] }}</p>
            <p>Контактное лицо: {{ $company['contact_person'] }}</p>
            <p>Телефон компании: {{ $company['phone'] }}</p>
            <p>Сайт: {{ $company['site'] ? $company['site'] : '-' }}</p>
            <p>Email: {{ $company['email'] }}</p>
            
            <p>{{ $company['description'] }}</p>
            <p><b>Категории услуг:</b></p>
            <div class="mb-3 mt-2 d-flex flex-wrap">
                @foreach ($services as $service)
                    <div class="services-list me-2 mb-2 d-flex align-items-center">{{ $service['title'] }}</div>
                @endforeach
            </div>
        </div>
    
    </div>
</div>

@endsection