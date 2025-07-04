<div class="col-12 col-md-3 border p-4 rounded menu mb-3">
    <ul>
        <p class="mb-2"><b>Меню</b></p>
        <li><a href="{{ Route('executor-index') }}">Главная страница</a></li>
        <hr>
        <p class="mb-2"><b>Компания</b></p>
        <li><a href="{{ Route('executor-company') }}">Моя компания</a></li>
        <li><a href="{{ Route('executor-add-company') }}">Добавить компанию</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Профиль</b></p>
        <li><a href="/customer/profile">Мой профиль</a></li>
        <li><a href="">Сменить пароль</a></li>
        <hr>
        <p class="mt-2 mb-2"><b>Платные услуги</b></p>
        <li><a href="/customer/profile">Изменить тариф</a></li>
    </ul>
</div>

<style>
    .menu {
        
        top: 20px;
        height: 530px;
    }
</style>