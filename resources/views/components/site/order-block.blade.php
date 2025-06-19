<div class="order-block mt-4">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ Storage::disk('orders_images')->url('123.jpg') }}" class="img-fluid">
            </div>
      
            <div class="col-8">
                <div class="d-flex flex-column flex-md-row">
                    <h2 class="order-title mb-4 me-2">{{ $order['title'] }}</h2>
                    <div class="active-order-badge text-center me-2">Открыт</div>
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

                <hr class="mt-3">
                <p class="mb-1"><b>Описание заказа:</b></p>
                <p>{{ $order['description'] }}</p>

                <p class="mb-2"><b>Категории:</b></p>
                <div class="mb-4 d-flex">
                    @foreach ($order['services'] as $service)
                        <div class="services-list me-2"><i class="bi bi-folder-check"></i> {{ $service->title }}</div>
                    @endforeach
                </div>

                <div class="mb-4 d-flex justify-content-end align-items-center">
                <a href="" class="btn btn-more mb-2">Посмотреть</a>
                <a href="" class="btn btn-file-download mb-2"><i class="bi bi-cloud-arrow-down"></i> Скачать чертежи</a>
                </div>
            </div>

        </div>
    </div>