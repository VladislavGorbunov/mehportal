<div class="order-block mt-4">
    <div class="order-block-square"></div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ Storage::disk('orders_images')->url('123.jpg') }}" class="img-fluid">
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <a href="{{ Storage::disk('orders_images')->url('123.jpg') }}" target="_blank" class="zoom-link"><i class="bi bi-zoom-in"></i> Увеличить чертёж</a>
                </div>
            </div>
      
            <div class="col-8">
                <div class="d-flex flex-column flex-md-row">
                    <h2 class="order-title mb-3 me-2">{{ $order['title'] }}</h2>
                    @if ($order['active'] == true)
                        <div class="active-order-badge text-center me-2">Заказ открыт</div>
                    @endif

                    @if ($order['archive'] == true)
                        <div class="archive-order-badge text-center me-2">Заказ закрыт</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="mb-1">Номер заказа:<strong> {{ $order['order_id'] }}</strong></p>
                        <p class="mb-1">Город заказчика:<strong> {{ $order['region_name'] }}</strong></p>
                        <p class="mb-1">Необходимое количество:<strong> {{ $order['quantity'] }} шт.</strong></p>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <p class="mb-1">Проходная цена:<strong> {{ $order['price'] }} руб.</strong></p>
                        <p class="mb-1">Дата сбора КП: до <strong>{{ $order['closing_date'] }}</strong> <small>- включительно</small></p>
                    </div> 
                </div>

                <hr>
                <p class="mb-1"><b>Описание заказа:</b></p>
                {{ $order['description'] }}

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

                <div class="mb-1 d-flex align-items-center">
                    <a href="" class="btn btn-more mb-2 me-2">Подробнее о заказе</a>
                    <a href="" class="btn btn-file-download mb-2"><i class="bi bi-cloud-arrow-down"></i> Скачать архив чертежей</a>
                </div>
            </div>

        </div>
    </div>