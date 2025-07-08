<div class="col-12 col-md-12 mt-2">
    <p><b>Город:</b> {{ $company['region_name'] }}</p>
    <p><b>Адрес:</b> {{ $company['address'] }}</p>
    <hr>
    @if (Auth::guard('customer')->user())
        @if (Auth::guard('customer')->user()->premium || $company['executor_premium'])
            <div class="row mt-3">
                <div class="col-12 col-md-6">
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
            <hr>
            <p>{{ (! empty($company['description'])) ? $company['description'] : 'Описание отсутствует..' }}</p>
        @else
            Закрываем контакты
        @endif
    @endif

    <a href="" class="btn btn-more mt-4 mb-2 me-2 d-flex align-items-center justify-content-center"><i class="bi bi-three-dots"></i> Подробнее</a>
</div>

