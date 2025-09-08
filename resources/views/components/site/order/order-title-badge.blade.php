<div class="d-flex flex-column flex-md-row align-items-center mb-2">
    <p class="mb-0 me-2 fs-4 fw-bold">{{ $order['title'] }}</p>
        
    @if ($order['active'] == true)
        <div class="active-order-badge text-center me-2">Заказ открыт</div>
    @endif

    @if ($order['archive'] == true)
        <div class="archive-order-badge text-center me-2">Заказ закрыт</div>
    @endif
</div>
