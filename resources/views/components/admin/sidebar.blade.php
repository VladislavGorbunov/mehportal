<div class="col-12 col-md-3 border p-4 rounded menu mb-3">
    <ul>
        <p class="mb-2"><b>Меню</b></p>
        <hr>
        <p class="mb-1"><b>Заказчики</b></p>
        <li><a href="{{ Route('admin-get-active-customers') }}">Активные заказчики</a></li>
        <li><a href="{{ Route('admin-get-noactive-customers') }}">Не активные заказчики</a></li>
        <li><a href="{{ Route('admin-get-premium-customers') }}">Premium заказчики</a></li>
        <li><a href="{{ Route('admin-customers-companies') }}">Организации заказчиков</a></li>
        <li><a href="{{ Route('admin-add-customer') }}">Добавить заказчика</a></li>
        <li><a href="{{ Route('admin-add-customer-company') }}">Добавить компанию</a></li>
        <hr>
        <p class="mt-2 mb-1"><b>Исполнители</b></p>
        <li><a href="{{ Route('admin-get-active-executors') }}">Активные исполнители</a></li>
        <li><a href="{{ Route('admin-get-noactive-executors') }}">Не активные исполнители</a></li>
        <li><a href="{{ Route('admin-get-premium-executors') }}">Premium исполнители</a></li>
        <li><a href="{{ Route('admin-executors-companies') }}">Организации исполнителей</a></li>
        <hr>
        <p class="mt-2 mb-1"><b>Заказы</b></p>
        <li><a href="{{ Route('active-orders') }}">Открытые заказы</a></li>
        <li><a href="{{ Route('archive-orders') }}">Архивные заказы</a></li>
        <hr>
        <p class="mt-2 mb-1"><b>Платные услуги</b></p>
        <li><a href="{{ Route('premium-customers-requests') }}">Заявки на Premium от заказчиков</a></li>
        <li><a href="{{ Route('premium-executors-requests') }}">Заявки на Premium от исполнителей</a></li>
        <li><a href="/customer/profile">Информация о Premium заказчиках</a></li>
        <li><a href="/customer/profile">Информация о Premium исполнителях</a></li>
        <hr>
        <p class="mt-2 mb-1"><b>Прочее</b></p>
        <li><a href="{{ Route('admin-categories-all') }}">Категории металлообработки</a></li>
        <li><a href="{{ Route('admin-services-all') }}">Услуги металлообработки</a></li>
        <hr>
        <li><a href="{{ Route('admin-categories-all') }}">Категории поставщиков</a></li>
        <li><a href="{{ Route('admin-services-all') }}">Подкатегории поставщиков</a></li>
        <hr>
        <li><a href="{{ Route('sitemap-generate') }}">Сгенерировать Sitemap</a></li>
    </ul>
</div>

<style>
    .menu {
        top: 20px;
        height: 1100px;
    }
</style>