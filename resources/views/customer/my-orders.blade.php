@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - мои заказы')
@section('description', 'Панель заказчика - мои заказы')

@section('content')
<div class="px-2">
<h2 class="fs-4">Мои заказы</h2>
<div class="mt-4">
<x-site.errors />
<x-site.message />
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
            <p class="mb-1"><strong>Коммерческих предложений:</strong> {{ $order->commercialOffers->count()}} <a href="">Смотреть предложения</a>
            <hr>
            @if ($order['active'] == true)
                <button class="btn btn-close-order mt-2" data-id="{{ $order['id'] }}">Закрыть заказ</button>
            @endif
        </div>
    </div>
@endforeach
</div>
</div>


<script>
    const btnClose = document.querySelectorAll('.btn-close-order')

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


{{ $orders->links() }}
@endsection

