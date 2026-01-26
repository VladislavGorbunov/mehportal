@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - мои заказы')
@section('description', 'Панель заказчика - мои заказы')

@section('content')
<div class="px-2">
<h2 class="fs-4">Мои заказы</h2>
<div class="mt-4">
<x-site.errors />
<x-site.message />

<style>
    .btn-view-order, .btn-view-order:hover {
        position: relative;
        color: #fff;
        z-index: 2;
        background: var(--btn-blue-color);
        padding: 8px 18px;
        border: none;
        border-radius: 8px;
        font-size: 15px;
    }

    .btn-archive-order, .btn-archive-order:hover {
        position: relative;
        color: #fff;
        z-index: 2;
        background: #ee4040;
        padding: 8px 18px;
        border: none;
        border-radius: 8px;
        font-size: 15px;
    }
</style>

@if (! $orders) 
  <p>На данный момент вы ещё не разместили ни одного заказа.</p>
@endif

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

            <p class="mb-1">Номер заказа: <strong>{{ $order->id }}</strong></p>
            <p class="mb-1">Необходимое количество:<strong> {{ $order['quantity'] }} шт.</strong></p>
            <p class="mb-1">Дата сбора КП: до <strong>{{ $closing_date }}</strong> <small>- включительно</small></p>
            <hr>
            <p class="mb-1"><strong>Описание:</strong> {{ $order->description }}</p>

            <hr>
                <a href="/order/{{ $order->id }}" class="btn btn-view-order mt-2 me-3" target="_blank">На страницу заказа</a>
            @if ($order['active'] == true)
                <button class="btn btn-archive-order mt-2" data-id="{{ $order['id'] }}">Закрыть заказ</button>
            @endif
        </div>
    </div>
@endforeach
</div>
</div>


<script>
    const btnClose = document.querySelectorAll('.btn-archive-order')

    btnClose.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            let id = e.target.getAttribute('data-id')
            let confirmation = confirm('Вы действительно хотите закрыть заказ?')

            if (confirmation) {
                window.location.href = `/customer/order/close/${id}`;
            }
        })
    })
</script>

@if ($orders) 
    {{ $orders->links() }}
@endif
@endsection

