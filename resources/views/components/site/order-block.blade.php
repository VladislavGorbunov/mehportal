<div class="order-block mt-4">
    <div class="order-block-square"></div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ Storage::disk('orders_images')->url($order['order_image']) }}" class="img-fluid order-image d-block mx-auto">
                <div class="d-flex justify-content-center mt-3 mb-3">
                    @if ($order['order_image'] != 'no-image.jpg')
                        <a href="{{ Storage::disk('orders_images')->url($order['order_image']) }}" target="_blank" class="zoom-link"><i class="bi bi-zoom-in"></i> Увеличить чертёж</a>
                    @endif
                </div>
            </div>
      
            <div class="col-12 col-md-8">
                <div class="d-flex flex-column flex-md-row">
                    <h2 class="order-title mb-3 me-2">{{ $order['title'] }}</h2>
                    @if ($order['active'] == true)
                        <div class="active-order-badge text-center me-2 mb-2">Заказ открыт</div>
                    @endif

                    @if ($order['archive'] == true)
                        <div class="archive-order-badge text-center me-2 mb-2">В архиве</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="mb-2">Номер заказа:<strong> {{ $order['order_id'] }}</strong></p>
                        
                        @if ($order['customer_premium']) 
                            <p class="mb-2">Статус заказчика: <span class="mb-1 premium-customer2"><i class="bi bi-fire"></i> Premium</span></p>
                            <p class="mb-2">Контакты: <a href="/order/{{ $order['order_id'] }}" target="_blank">Доступны всем исполнителям</a></p>
                        @else
                            <p class="mb-2">Статус заказчика: Стандартный</p>
                        @endif
                        
                        <p class="mb-2">Город заказчика:<strong> {{ $order['region_name'] }}</strong></p>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <p class="mb-2">Необходимое количество:<strong> {{ $order['quantity'] }} шт.</strong></p>
                        @if ($order['price'] > 0)
                            <p class="mb-2">Проходная цена:<strong> {{ $order['price'] }} руб.</strong></p>
                        @else 
                            <p class="mb-2">Проходная цена:<strong> Договорная</strong></p>
                        @endif
                        <p class="mb-2">Дата сбора КП: до <strong>{{ $order['closing_date'] }}</strong> <small>- включительно</small></p>
                    
                       
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

                <div class="mb-1 d-flex flex-column flex-md-row align-items-start">
                    <a href="/order/{{ $order['order_id'] }}" class="btn btn-more mb-2 me-2 d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-three-dots"></i> Подробнее о заказе</a>
                    @if (!empty($order['order_archive']))
                        <a href="{{ Storage::disk('orders_files')->url($order['order_archive']) }}" class="btn btn-file-download mb-2"><i class="bi bi-cloud-arrow-down"></i> Скачать файлы</a>
                    @else
                        <a class="btn btn-file-download-noactive mb-2 d-flex align-items-center justify-content-center"><i class="bi bi-cloud-arrow-down"></i> Файлы отсутствуют</a>
                    @endif
                </div>
            </div>

        </div>
    </div>