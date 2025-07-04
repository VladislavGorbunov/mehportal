<div class="alert alert-primary text-center mt-4 mb-0 py-4">
    <p class="m-0 fs-5">Мы старались, но не нашли исполнителей в данном разделе..</p>
    <small>Вы исполнитель? Разместите свою компанию в нашем каталоге абсолютно бесплатно!</small>
    @if (Auth::guard('executor')->user())
        <p class="mt-3 mb-0"><a href="/executor/add-company" class="btn btn-add-order-site">Добавить компанию бесплатно</a></p>
    @else
        <p class="mt-3 mb-0"><a href="/login/executor" class="btn btn-add-order-site">Добавить компанию бесплатно</a></p>
    @endif
</div>