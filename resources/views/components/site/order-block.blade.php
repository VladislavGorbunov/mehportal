<div class="order-block mt-4">
        <div class="row">
            <div class="col-4">
                <img src="{{ Storage::disk('orders_images')->url('123.jpg') }}" class="img-fluid">
            </div>
            
            <div class="col-8">
                <div class="row">
                    <h2 class="order-title mb-3">{{ $order->title }}</h2>
               
                    <div class="col-12 col-md-6">
                        <p class="mb-1"><strong>Номер заказа:</strong> {{ $order->id }}</p>
                        <p class="mb-1"><strong>Заказчик:</strong> {{ $order->company_legal_form }} «{{ $order->company_title }}»</p>
                        <p class="mb-1"><strong>Город заказчика:</strong> {{ $order->region_name }}</p>
                        
                    </div>

                    
                    @php 
                        $closing_date = date("d.m.Y", strtotime($order->closing_date))
                    @endphp
                    

                    <div class="col-12 col-md-6">
                        <p class="mb-1"><strong>Необходимое количество:</strong> {{ $order->quantity }} шт.</p>
                        <p class="mb-1"><strong>Проходная цена:</strong> {{ $order->price }} руб.</p>
                        <p class="mb-1"><strong>Дата сбора КП:</strong> до {{ $closing_date }} </p>
                    </div> 
                </div>
                <hr class="mt-3">
                <p>{{ $order->description }}</p>
                <a href="" class="btn btn-more mb-2">Посмотреть</a>
                <a href="" class="btn btn-file-download mb-2"><i class="bi bi-cloud-arrow-down"></i> Скачать чертежи</a>
            </div>

        </div>
    </div>