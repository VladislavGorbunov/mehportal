@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')
    
    <div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/order/{{ $order->id }}"><small>Заказ {{ $order->title }}</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Отправить коммерческое предложение</small></li>
        </ol>
    </nav>
    </div>

    <x-site.errors />

    <form method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Ваша компания:</label>
                    <input type="text" class="form-control" name="company_name" value="{{ $executor['company_name'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">ИНН:</label>
                    <input type="text" class="form-control" name="company_inn" value="{{ $executor['company_inn'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Регион:</label>
                    <input type="text" class="form-control" name="company_region" value="{{ $executor['region'] }}" readonly>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Контактное лицо:</label>
                    <input type="text" class="form-control" name="contact_person" value="{{ $executor['contact_person'] }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон для связи:</label>
                    <input type="text" class="form-control" name="contact_phone" value="{{ $executor['contact_phone'] }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email для связи:</label>
                    <input type="email" class="form-control" name="contact_email" value="{{ $executor['contact_email'] }}">
                </div>
            </div>
        </div>

        <label class="form-label">Текст коммерческого предложения:</label>
        <textarea class="form-control" rows="5" name="cp_text"></textarea>   
        
        <input type="text" class="form-control" name="customer_id" value="{{ $order->customer_id }}" hidden>
        <input type="text" class="form-control" name="order_id" value="{{ $order->id }}" hidden>

        <button type="submit" class="btn btn-blue mt-3">Отправить КП заказчику</button>
</form>
    
    

@endsection