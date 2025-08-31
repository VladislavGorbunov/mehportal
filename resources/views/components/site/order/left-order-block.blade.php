<div class="col-12 col-md-4">
    <img src="{{ Storage::disk('orders_images')->url($order['order_image']) }}" class="img-fluid order-image d-block mx-auto" alt="Чертёж к заказу - {{ $order['title'] }}">
        <div class="mt-3 mb-3">
            <div>
                @if ($order['order_image'] != 'no-image.jpg')
                    <a href="{{ Storage::disk('orders_images')->url($order['order_image']) }}" target="_blank" class="zoom-link d-flex justify-content-center align-items-center mb-3"><i class="bi bi-zoom-in mx-2"></i> Увеличить чертёж</a>
                @endif
            </div>

            <div>
                @if (!empty($order['order_archive']))
                    <a href="{{ Storage::disk('orders_files')->url($order['order_archive']) }}" class="btn btn-file-download mb-2 d-flex justify-content-center align-items-center"><i class="bi bi-cloud-arrow-down mx-2"></i> Скачать файлы</a>
                @else
                    <a class="btn btn-file-download-noactive mb-2 d-flex justify-content-center align-items-center"><i class="bi bi-cloud-arrow-down mx-2"></i> Файлы отсутствуют</a>
                @endif
            </div>
        </div>
</div>
