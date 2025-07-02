<div class="col-12 col-md-6">
    @if ($order['customer_premium']) 
        <p class="mb-2">Статус заказчика: <span class="mb-1 premium-customer2"><i class="bi bi-fire"></i> Premium</span></p>
    @endif
    <p class="mb-2">Номер заказа: <b>№{{ $order['id'] }}</b></p>
    <p class="mb-2">Город заказчика:<strong> {{ $order['region_name'] }}</strong></p>
    <p class="mb-2">Дата размещения: <b>{{ $order['date'] }}</b></p>
    
</div>

<div class="col-12 col-md-6">
    <p class="mb-2">Дата сборка КП: <b>до {{ $order['closing_date'] }}</b> - <small>включительно</small></p>
    <p class="mb-2">Необходимое количество: <b>{{ $order['quantity'] }} шт.</b></p>
        @if ($order['price'] > 0)
            <p class="mb-2">Проходная цена: <b>{{ $order['price'] }} руб.</b></p>
        @else
            <p class="mb-2">Проходная цена: <b>Договорная</b></p>
        @endif
</div>