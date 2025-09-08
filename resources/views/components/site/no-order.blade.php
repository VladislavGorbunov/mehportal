<hr class="mt-4">
<div class="d-flex flex-column flex-md-row align-items-center mb-0 py-4">

    <div class="col-12 col-md-6">
        <img src="/images/cnc-machine.png" style="width:180px" class="d-block mx-auto" alt="Поиск заказов на металлообработку в открытом доступе" loading="lazy">
        <p class="text-center text-secondary mt-0">Мы старались, но не нашли актуальных заказов..</p>
    </div>
    
    <div class="col-12 col-md-6 px-4 py-1" style="border: 2px solid rgba(19, 88, 200, 0.1); border-radius: 15px;">
    <p class="text-center mb-1 mt-3 fs-5"><b>Добавьте свой заказ на наш сайт в числе первых!</b></p>
    <p class="text-center mb-1" style="color:rgb(19, 88, 200);font-size: 15px">Дарим Premium статус на 6 месяцев всем новым пользователям! 😎</p>
    <p class="text-center">Наш сервис совсем недавно начал свою работу, поэтому заказчики ещё не разместили свои заказы.
    Вы можете быть первым и абсолютно бесплатно разместить ваш заказ на нашем сервисе прямо сейчас!</p>
    @if (Auth::guard('customer')->user())
        <a href="/customer/add-order" class="btn btn-add-order-site col-12 col-md-6 d-block mx-auto mb-3"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
    @else
        <a href="/login/customer" class="btn btn-add-order-site col-12 col-md-6 d-block mx-auto mb-3"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
    @endif
    <p class="text-center mt-1"><small>Вы владелец металлобрабатывающего предприятия? <br>Добавьте вашу организацию в наш каталог и заказчики сами найдут вас! <br><a href="/executor">Зарегистрироваться как исполнитель</a></small></p>
    </div>

</div>
<hr class="mb-4">

<h3 class="text-center mt-1 fs-4">Пример, как будет выглядеть ваш заказ после размещения:</h3>
<div class="order-block mt-4">
    <div class="order-block-square"></div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ Storage::disk('orders_images')->url('demo.png') }}" class="img-fluid order-image d-block mx-auto" alt="" loading="lazy">
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <a href="{{ Storage::disk('orders_images')->url('demo.png') }}" target="_blank" class="zoom-link"><i class="bi bi-zoom-in"></i> Увеличить чертёж</a>
                </div>
            </div>
      
            <div class="col-12 col-md-8">
                <div class="d-flex flex-column flex-md-row">
                    <h2 class="order-title mb-3 me-2">Изготовить втулки из стали</h2>
                        <div class="active-order-badge text-center me-2 mb-2">Заказ открыт</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mt-2">
                        <p class="mb-3">Номер заказа в системе: <strong>#342</strong></p>
                            <p class="mb-3">Статус заказчика: <span class="mb-1 premium-customer2"><i class="bi bi-fire"></i> Premium заказчик</span></p>
                            <p class="mb-3">Контакты: <a>Доступны всем исполнителям</a></p>
                        <p class="mb-3">Регион заказчика: <strong>Санкт-Петербург и ЛО</strong></p>
                    </div>
                    
                    <div class="col-12 col-md-6 mt-2">
                        <p class="mb-3">Необходимое количество:<strong> 45 шт.</strong></p>
                        <p class="mb-3">Проходная цена: <strong>115000 руб.</strong></p>
                        <p class="mb-3">Дата сбора КП: до <strong>31.12.2029</strong> <small>- включительно</small></p>
                    </div> 
                </div>
                <hr>
            
                <p class="mb-1"><b>Описание заказа:</b></p>
                Необходимо срочно изготовить втулки по чертежам, в количестве 45 штук. Материал Сталь 45.
                Просьба направить коммерческие предложения на нашу почту.

                <p class="mt-3 mb-0"><b>Категории:</b></p>
                <div class="mb-3 mt-2 d-flex flex-wrap">
                <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> Механическая обработка</div>
                </div>
                <div class="mb-1 d-flex flex-column flex-md-row align-items-start">
                    <a class="btn btn-more mb-2 me-2 col-12 col-md-3 d-flex align-items-center justify-content-center" target="_blank">Подробнее о заказе</a>
                    <button type="button" class="btn btn-cp col-12 col-md-3 mb-2 me-3 d-flex align-items-center justify-content-center"><i class="bi bi-lock"></i> Отправить КП</button>
                    <a class="btn btn-file-download mb-2 col-12 col-md-3 d-flex align-items-center justify-content-center"><i class="bi bi-cloud-arrow-down"></i> Скачать файлы</a>
                </div>
            </div>

        </div>
    </div>