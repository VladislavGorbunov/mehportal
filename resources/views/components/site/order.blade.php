<div class="mt-4">
<div class="row">
    <div class="col-12 col-md-4">
        <div class="sticky">
        <img src="{{ Storage::disk('orders_images')->url($order['order_image']) }}" class="img-fluid order-image d-block mx-auto">
        <div class="mt-3 mb-3">
            <div>
                @if ($order['order_image'] != 'no-image.jpg')
                    <a href="{{ Storage::disk('orders_images')->url($order['order_image']) }}" target="_blank" class="zoom-link d-flex justify-content-center align-items-center mb-3"><i class="bi bi-zoom-in mx-2"></i> Увеличить чертёж</a>
                @endif
            </div>

            <div>
                @if (!empty($order['order_archive']))
                    <a href="{{ Storage::disk('orders_files')->url($order['order_archive']) }}" class="btn btn-file-download mb-2 d-flex justify-content-center align-items-center"><i class="bi bi-cloud-arrow-down mx-2"></i> Скачать файлы к заказу</a>
                @else
                    <a class="btn btn-file-download-noactive mb-2 d-flex justify-content-center align-items-center"><i class="bi bi-cloud-arrow-down mx-2"></i> Файлы отсутствуют</a>
                @endif
            </div>
        </div>   </div>   
    </div>

    <style>
        .sticky {
            position: sticky;
            top: 20px;
        }
    </style>

    <div class="col-12 col-md-8">
        <div class="row">
            <div class="d-flex flex-column flex-md-row">
                    <p class="mb-3 me-2">Название заказа: <b>{{ $order['title'] }}</b></p>
                    @if ($order['active'] == true)
                        <div class="active-order-badge text-center me-2">Заказ открыт</div>
                    @endif

                    @if ($order['archive'] == true)
                        <div class="archive-order-badge text-center me-2">Заказ закрыт</div>
                    @endif
                </div>
            <div class="col-12 col-md-6">
                <p class="mb-2">Номер заказа: <b>№{{ $order['id'] }}</b></p>
                <p class="mb-2">Дата размещения: <b>{{ $order['date'] }}</b></p>
                <p class="mb-2">Дата сборка КП: <b>до {{ $order['closing_date'] }}</b> - <small>включительно</small></p>
            </div>

            <div class="col-12 col-md-6">
                <p class="mb-2">Необходимое количество: <b>{{ $order['quantity'] }} шт.</b></p>
                @if ($order['price'] > 0)
                    <p class="mb-2">Проходная цена: <b>{{ $order['price'] }} руб.</b></p>
                @else
                    <p class="mb-2">Проходная цена: <b>Договорная</b></p>
                @endif
            </div>
        </div>

        <p class="mt-3 mb-0"><b>Категории:</b></p>
            <div class="mb-3 mt-2 d-flex flex-wrap">
                @foreach ($order['services'] as $service)
                    @if ($regionSlug !== '')
                        <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="/{{ $regionSlug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
                    @else
                        <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="{{ $regionSlug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
                    @endif
                @endforeach
            </div>
        <hr>
        <p class="mb-2"><b>Описание заказа:</b></p>
        <p>{{ $order['description'] }}</p>
        <hr>
        <div class="row">
            <p class="mt-3 mb-2"><b>Контакты заказчика:</b></p>
            @if (Auth::guard('executor')->user())
                @if (Auth::guard('executor')->user()->premium)
                <div class="col-12 col-md-6">
                    <p class="mb-2">Заказчик: <b>{{ $order['company_legal_form'] }} {{ $order['company_title'] }}</b></p>
                    <p class="mb-2">ИНН заказчика: <b>{{ $order['company_inn'] }}</b></p>
                    <p class="mb-2">Регион заказчика: <b>{{ $order['region_name'] }}</b></p>
                    <p class="mb-2">Адрес заказчика: <b>{{ $order['company_address'] }}</b></p>
                </div>

                <div class="col-12 col-md-6">
                    <p class="mb-2">Контактное лицо: <b>{{ $order['person'] }}</b></p>
                    <p class="mb-2">Телефон заказчика: <b>{{ $order['company_phone'] }}</b></p>
                    <p class="mb-2">Добавочный: <b>{{ $order['extension_number'] }}</b></p>
                    <p class="mb-2">Email заказчика: <b>{{ $order['company_email'] }}</b></p>
                </div>
                @else
                <x-site.hidden-customer-contacts/>
                @endif
            @endif
        </div>

        @if (Auth::guard('executor')->user())
            @if (!Auth::guard('executor')->user()->premium)
                <div class="alert alert-primary mt-4 text-center">
                    <small>Контакты заказчика доступны зарегистрированным исполнителям с профессиональным тарифом.</small><br>
                    <p class="mt-3 mb-1">Тариф <b>«Профессионал»</b> - от 3990 руб/месяц <a href="" class="buy-tarif ms-2">Подключить</a></p>
                </div>
            @endif
        @else
        <div class="row">
            <x-site.hidden-customer-contacts/>
        </div>
            <div class="alert alert-primary mt-4 text-center">
                <small>Контакты заказчика доступны зарегистрированным исполнителям с профессиональным тарифом.</small><br>
                <p class="mt-3 mb-1">Тариф <b>«Профессионал»</b> - от 3500 руб/месяц <a href="{{ Route('login-executor') }}" class="buy-tarif ms-2" target="_blank">Подключиться</a></p>
            </div>
        @endif

    </div>
</div>
</div>