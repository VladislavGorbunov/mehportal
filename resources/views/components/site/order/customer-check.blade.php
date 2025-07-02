<p class="mt-2 mb-0 fs-5"><b>Данные о заказчике из ФНС и ФАС:</b> </p>

@if ($check) 
<small style="color:rgb(57, 174, 96)">Данные проверены: {{ $orderDate}}</small>
<div class="col-12 col-md-12 mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <p class="mb-3"><b>ОГРН:</b> {{ $check->ogrn ? $check->ogrn : '-' }}</p>
            <p class="mb-2"><b>КПП:</b> {{ $check->kpp ? $check->kpp : '-'}}</p>
        </div>

        <div class="col-12 col-md-6">
            <p class="mb-3"><b>ОКПО:</b> {{ $check->okpo ? $check->okpo : '-' }}</p>
            @if ($check->status_sulst == '001')
                <p class="mb-2"><b>Статус организации:</b> Действующая организация</p>
            @elseif ($check->status_sulst == '701' || $check->status_sulst == '702' || $check->status_sulst == '801')
                <p class="mb-2"><b>Статус организации:</b> регистрация ЮЛ недействительна</p>
            @else
                <p class="mb-2"><b>Статус организации:</b> -</p>
            @endif
        </div>
    </div>
    <hr>
    <p class="mb-3 mt-3"><b>Признак включения в реестр недобросовестных поставщиков:</b> {{ $check->bad_provider ? 'Да' : 'Нет' }} </p>
    <p class="mb-3"><b>Признак включения в санкционные списки: </b> {{ $check->sanctions ? 'Да' : 'Нет' }}</p>
    <p class="mb-3"><b>Юр. адрес:</b> {{ $check->ur_address }}</p>
    <p class="mb-3"><b>Основной код ОКВЭД:</b> {{ $check->okved_code }}</p>
    <p class="mb-3"><b>Основной вид деятельности:</b> {{ $check->okved_name }}</p>
    <p class="mb-3"><b>Уставной капитал:</b> {{ $check->capital }} руб.</p>
    <p class="mb-3"><b>Руководитель:</b> {{ $check->director_fio }}</p>
    <p class="mb-3"><b>Сайт компании:</b> {{ $check->site ? $check->site : '-' }}</p>
    
</div>
@else
    <div class="alert alert-primary text-center">
        Нам неудалось получить данные о заказчике. <br>
        Вы можете проверить компанию самостоятельно на этом ресурсе:<br> <a href="https://checko.ru/">Проверить компанию на Checko</a>
    </div>
@endif