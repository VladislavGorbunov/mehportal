<div class="order-block mt-4">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ Storage::disk('orders_images')->url('123.jpg') }}" class="img-fluid">
            </div>
      
            <div class="col-8">
                <div class="d-flex flex-column flex-md-row">
                    <h2 class="order-title mb-3 me-2">{{ $order['title'] }}</h2>
                    <div class="active-order-badge text-center me-2">Заказ открыт</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="mb-1"><strong>Номер заказа:</strong> {{ $order['order_id'] }}</p>
                        <p class="mb-1"><strong>Город заказчика:</strong> {{ $order['region_name'] }}</p>
                        <p class="mb-1"><strong>Необходимое количество:</strong> {{ $order['quantity'] }} шт.</p>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <p class="mb-1"><strong>Проходная цена:</strong> {{ $order['price'] }} руб.</p>
                        <p class="mb-1"><strong>Дата сбора КП:</strong> до {{ $order['closing_date'] }} </p>
                    </div> 
                </div>

                <hr>
                <p class="mb-1"><b>Описание заказа:</b></p>
                {{ $order['description'] }}

                
                <div class="mb-3 mt-3 d-flex flex-wrap">
                    @foreach ($order['services'] as $service)
                        <div class="services-list me-2 mb-2"><i class="bi bi-folder-check"></i> {{ $service->title }}</div>
                    @endforeach
                </div>

                <div class="mb-1 d-flex align-items-center">
                    <a href="" class="btn btn-more mb-2 me-2">Подробнее о заказе</a>
                    <a href="" class="btn btn-file-download mb-2"><i class="bi bi-cloud-arrow-down"></i> Скачать архив чертежей</a>
                </div>
            </div>

        </div>
    </div>