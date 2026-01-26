@extends('layouts.admin-panel')

@section('title', 'Панель администратора - архивные заказы')
@section('description', 'Панель администратора - архивные заказы')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Список архивных заказов</h2>
</div>
        <x-site.message />
        <div class="row mt-2">
           @foreach ($orders as $order)
                <div class="col-12 mt-2 mb-2">
                    <div class="col-12 border rounded p-3">
                        <h4 class="fs-5 mb-3">{{ $order->title }}</h4>
                        <p>Заказчик: <a href="{{ Route('admin-customer-company-edit', ['id' => $order->customerCompany->id]) }}" target="_blank">{{ $order->customerCompany->legal_form }} {{ $order->customerCompany->title }}</a></p> 
                        <a href="{{ Route('admin-order-edit', ['id' => $order->id]) }}">Изменить</a>
                        <hr class="m-1">
                        <a href="">Перенести в архив</a>
                    </div>
                </div>
            @endforeach
        </div>
@endsection