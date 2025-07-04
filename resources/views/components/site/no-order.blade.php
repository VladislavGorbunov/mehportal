<div class="alert alert-primary text-center mt-4 mb-0 py-4">
    <p class="m-0 fs-5">Мы старались, но не нашли заказов в данном разделе..</p>
    <small>Вы заказчик? Разместите заказ абсолютно бесплатно!</small>
    @if (Auth::guard('customer')->user())
        <p class="mt-3 mb-0"><a href="/customer/add-order" class="btn btn-add-order-site">Разместить заказ бесплатно</a></p>
    @else
        <p class="mt-3 mb-0"><a href="/login/customer" class="btn btn-add-order-site">Разместить заказ бесплатно</a></p>
    @endif
</div>