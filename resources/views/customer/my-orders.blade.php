@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - мои заказы')
@section('description', 'Панель заказчика - мои заказы')

@section('content')
<div class="p-3">
<h2 class="fs-4">Мои заказы</h2>
<div class="mt-4">
@foreach ($orders as $order)
    <div class="row mt-3 mb-4 p-3 border rounded">
        <div class="col-4">
            <img src="{{ Storage::disk('orders_images')->url($order['order_image']) }}" class="img-fluid order-image d-block mx-auto">
        </div>
        <?php
            $closing_date = date("d.m.Y", strtotime($order->closing_date));
        ?>
        <div class="col-8">
            <h4 class="order-title mb-3 me-2">{{ $order->title }}</h4>
            @if ($order['active'] == true)
                <div class="active-order-badge text-center me-2 mb-2">Заказ открыт</div>
            @endif

            @if ($order['archive'] == true)
                <div class="archive-order-badge text-center me-2 mb-2">Заказ закрыт</div>
            @endif

            <p class="mb-1">Номер заказа: {{ $order->id }}</p>
            <p class="mb-1">Необходимое количество:<strong> {{ $order['quantity'] }} шт.</strong></p>
            <p class="mb-1">Описание: {{ $order->description }}</p>
            <p class="mb-1">Дата сбора КП: до <strong>{{ $closing_date }}</strong> <small>- включительно</small></p>

            <a href="">Закрыть заказ</a>
        </div>
    </div>
@endforeach
</div>
</div>
@endsection