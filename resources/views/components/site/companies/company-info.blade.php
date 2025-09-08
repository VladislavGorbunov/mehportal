<div class="col-12 col-md-12 mt-2">
    
    <p><b>Регион:</b> {{ $company['region_name'] }}</p
    <hr>
    @if (Auth::guard('customer')->user())
        @if (Auth::guard('customer')->user()->premium || $company['executor_premium'])
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <p><b>Адрес:</b> {{ $company['address'] }}</p>
                    <p><b>ИНН:</b> {{ $company['inn'] }}</p>
                    <p><b>Телефон контактного лица:</b> {{ $company['executor_phone'] }}</p>
                    <p><b>Email контактного лица:</b> {{ $company['executor_email'] }}</p>
                </div>

                <div class="col-12 col-md-6">
                    
                    <p><b>Телефон компании:</b> {{ $company['company_phone'] }}</p>
                    <p><b>Email компании:</b> {{ $company['company_email'] }}</p>
                    <p><b>Сайт:</b> {{ $company['company_site'] ? $company['company_site'] : '-' }}</p>
                </div>
            </div>

        @else
            <p class="text-danger"><small>Контакты этого исполнителя доступны зарегистрированным заказчикам с Premium тарифом.</small></p>
        @endif
    @endif
    <hr>
    <p>{{ (! empty($company['description'])) ? $company['description'] : 'Описание отсутствует..' }}</p>
    <p><b>Категории услуг:</b></p>
    <div class="mb-3 mt-2 d-flex flex-wrap">
        @foreach ($company['services'] as $service)
            <div class="services-list me-2 mb-2 d-flex align-items-center">{{ $service->title }} </div>
        @endforeach
    </div>

    <a href="/company/{{ $company['inn'] }}" class="btn btn-more col-12 col-md-3 mt-4 mb-2 me-2 d-flex align-items-center justify-content-center">Подробнее</a>
    <div class="order-block-square"></div>
</div>

