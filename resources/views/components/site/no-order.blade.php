<hr class="mt-4">
<div class="d-flex flex-column flex-md-row align-items-center mb-0 py-4">

    <div class="col-12 col-md-6">
        <img src="/images/cnc-machine.png" style="width:180px" class="d-block mx-auto" alt="Поиск заказов на металлообработку в открытом доступе" loading="lazy">
        <p class="text-center fs-5 mt-0">Мы старались, но не нашли <br> актуальных заказов в этом разделе..</p>
            <div class="mt-4 mb-4">
                <a href="/" class="text-center text-decoration-underline d-block mx-auto fs-5">Смотреть заказы по всей России</a>
            </div>
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

