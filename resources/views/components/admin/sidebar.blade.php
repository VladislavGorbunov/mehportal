<div class="col-12 col-md-3 border p-4 rounded menu mb-3">
    <ul>
        <p class="mb-2"><b>Меню</b></p>
        <li><a href="">Главная страница</a></li>
        <hr>
        <p class="mb-2"><b>Заказчики</b></p>
        <li><a href="{{ Route('admin-get-active-customers') }}">Активные заказчики</a></li>
        <li><a href="{{ Route('admin-get-noactive-customers') }}">Не активные заказчики</a></li>
        <li><a href="{{ Route('admin-get-premium-customers') }}">Premium заказчики</a></li>
        <li><a href="">Организации заказчиков</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Исполнители</b></p>
        <li><a href="">Активные исполнители</a></li>
        <li><a href="">Не активные исполнители</a></li>
        <li><a href="">Premium исполнители</a></li>
        <li><a href="">Организации исполнителей</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Заказы</b></p>
        <li><a href="/customer/profile">Открытые заказы</a></li>
        <li><a href="/customer/profile">Архивные заказы</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Платные услуги</b></p>
        <li><a href="/customer/profile">Заявки на Premium</a></li>
    </ul>
</div>

<style>
    .menu {
        
        top: 20px;
        height: 650px;
    }
</style>