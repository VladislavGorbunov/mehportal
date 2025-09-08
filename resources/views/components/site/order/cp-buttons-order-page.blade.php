@if ($order['active'])
    @if (! Auth::guard('executor')->user())
        <button type="button" class="btn btn-cp col-12 mb-2 me-3 p-3 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-reg-cp"><i class="bi bi-lock"></i> Отправить КП</button>
    @else
        @if (! Auth::guard('executor')->user()->executorCompanies)
            <button type="button" class="btn btn-cp col-12 mb-2 me-3 p-3 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-add-company-cp"><i class="bi bi-lock"></i> Отправить КП</button>
        @else
            @if (!Auth::guard('executor')->user()->premium && !$order['customer_premium'])
                <button type="button" class="btn btn-cp col-12 mb-2 me-3 p-3 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-reg-cp-no-premium"><i class="bi bi-file-earmark-text"></i> Отправить КП</button>
            @else
                <a href="/order/{{ $order['id'] }}/send-cp" class="btn btn-cp col-12 mb-2 me-3 p-3 d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-file-earmark-text"></i> Отправить КП</a>
            @endif
        @endif
    @endif
@else
    <button type="button" class="btn btn-cp col-12 mb-2 me-3 p-3 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-cp-deactive"><i class="bi bi-lock"></i> Отправить КП</button>
@endif