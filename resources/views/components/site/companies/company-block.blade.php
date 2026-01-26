<div class="order-block mt-4">
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="{{ Storage::disk('executors_logo')->url($company['logo']) }}" class="img-fluid order-image d-block mx-auto rounded">
            
        </div>

        <div class="col-12 col-md-9">
            <h2 class="order-title mb-3">{{ $company['legal'] }} «{{ $company['title'] }}»</h2>
            @if ($company['executor_premium'])
                <span class="mx-0 mb-2 premium-executor"><i class="bi bi-fire"></i> Premium исполнитель</span>
            @endif
            <x-site.companies.company-info :company="$company"/>
        </div>
    </div>
</div>