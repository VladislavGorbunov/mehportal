<div class="alert alert-primary d-flex flex-column flex-md-row text-center align-items-center justify-content-center gap-4 mt-4 mb-0 py-4">
    <div><p class="m-0 fs-5">Нужно найти исполнителя для вашего заказа? </p>
    <small>Разместите заказ абсолютно бесплатно в нашем каталоге!</small></div>
    @if (Auth::guard('customer')->user())
        <a href="/customer/add-order" class="btn btn-add-order-site"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
    @else
        <a href="/login/customer" class="btn btn-add-order-site"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
    @endif
    
</div>