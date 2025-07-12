<div class="col-12 col-md-6 mt-2">
    @if ($order['customer_premium']) 
        <p class="mb-3">Статус заказчика: <span class="mb-1 premium-customer2"><i class="bi bi-fire"></i> Premium</span></p>
    @endif
    <p class="mb-3">Номер заказа в системе: <b>#{{ $order['id'] }}</b></p>
    <p class="mb-3">Регион заказчика:<strong> {{ $order['region_name'] }}</strong></p>
    <p class="mb-3">Дата размещения: <b>{{ $order['date'] }}</b></p>
    
</div>

<div class="col-12 col-md-6 mt-2">
    <p class="mb-3">Дата сборка КП: <b>до {{ $order['closing_date'] }}</b> - <small>включительно</small></p>
    <p class="mb-3">Необходимое количество: <b>{{ $order['quantity'] }} шт.</b></p>
        @if ($order['price'] > 0)
            <p class="mb-3">Проходная цена: <b>{{ $order['price'] }} руб.</b></p>
        @else
            <p class="mb-3">Проходная цена: <b>Договорная</b></p>
        @endif
</div>