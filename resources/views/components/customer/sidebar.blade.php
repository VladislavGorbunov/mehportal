<div class="col-12 col-md-3 border p-4 rounded menu mb-3">
    <ul>
        <p class="mb-2"><b>Меню</b></p>
        <li><a href="{{ Route('customer-index') }}">Главная страница</a></li>
        <hr>
        <p class="mb-2"><b>Компания</b></p>
        <li><a href="{{ Route('customer-company') }}">Моя компания</a></li>
        <li><a href="{{ Route('customer-add-company') }}">Добавить компанию</a></li>
        <li><a href="{{ Route('customer-add-company') }}">Отзывы</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Заказы</b></p>
        <li><a href="{{ Route('add-order') }}">Разместить заказ</a></li>
        <li><a href="{{ Route('my-orders') }}">Мои заказы</a></li>
        <li><a href="">Отклики</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Профиль</b></p>
        <li><a href="">Мой профиль</a></li>
        <li><a href="">Сменить пароль</a></li>
    </ul>
</div>

<style>
    .menu {
        
        top: 20px;
        height: 530px;
    }
</style>