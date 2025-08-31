<div class="mt-5">
<h2 class="text-center mt-0 mb-1">Новые компании по металлообработке на сайте:</h2>
<p class="text-center small-text">Вы владелец производства? Хотите увеличить количество заказов? Добавьте свою компанию в наш каталог.</p>
<div class="row">

    @foreach ($companies as $company)
    <div class="col-12 col-md-4 mt-2 mb-3">
        <div class="col-12 p-4 latest-company-column">
        <div class="square"></div>
        <p class="fs-6 fw-bold mb-3">{{ $company['legal_form'] }} «{{ $company['title'] }}»</p> 
        @if ($company['premium'])
            <span class="mx-0 premium-executor"><i class="bi bi-fire"></i> Premium исполнитель</span>
        @endif
        <p class="my-3 text-secondary"><small>Регион: {{ $company['region_name'] }}</small></p>
        <p class="my-3">Email: {{ $company['email'] }}</p>
        <p class="my-3">Телефон: {{ $company['phone'] }}</p>
        
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div class="mt-2"><a href="/company/{{ $company['inn'] }}"><small>На страницу компании <i class="bi bi-arrow-right-short"></i></small></a></div>
            <div class="mt-2 text-secondary"><small>{{date('d.m.Y', strtotime($company['created_at']))}}</small></div>
        </div>
        </div>
    </div>
    @endforeach
    
    <div class="col-12 col-md-4 mt-2 mb-3">
        <div class="col-12 p-4 latest-company-column" style="min-height: 295px;">
            <div class="square-2"></div>
            
            <h4 class="fs-5 mb-1">Оказываете услуги по металлообработке?</h4> 
            <p class="my-2">Добавьте информацию о вашем производстве на наш сайт чтобы получать больше заказов!</p>
            <img src="/images/icons8-gift.gif" align="left" class="me-2" width="40" alt="Бесплатный Premium статус для всех новых исполнителей">
            <p class="blue-text small-text">Дарим 6 месяцев PREMIUM статуса всем новым пользователям нашего сервиса!</p>
            <hr>
            <a href="{{ Route('executor-add-company') }}" class="btn btn-blue p-3 mt-2">Добавить компанию</a>
        </div>
    </div>
    
    
</div>

</div>