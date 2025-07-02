<div class="d-flex flex-column flex-md-row">
    <p class="mb-3 me-2">Название заказа: <b>{{ $order['title'] }}</b></p>
        
    @if ($order['active'] == true)
        <div class="active-order-badge text-center me-2">Заказ открыт</div>
    @endif

    @if ($order['archive'] == true)
        <div class="archive-order-badge text-center me-2">Заказ закрыт</div>
    @endif
</div>