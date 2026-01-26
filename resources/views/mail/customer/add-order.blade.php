<style>
    h1 {
        font-size: 24px;
        text-align: center;
    }
    
    .btn {
        display: block;
        width: 240px;
        height: auto;
        padding: 13px 20px;
        text-align: center;
        color: #fff;
        text-decoration: none;
        border-radius: 12px;
        background: rgb(19, 88, 200);
        margin: 20px auto;
    }
</style>
<h1>Ваш заказ добавлен на сайт МехПортал</h1>

<ul>
    <ol>Заказ: {{ $order_title }}</ol>
    <ol>ID заказа: {{ $order_id }}</ol>
    <ol>Ссылка на страницу заказа: <a href="https://mehportal.ru/order/">Перейти</a></ol>
</ul>
<br>

<a href="https://mehportal.ru/customer" class="btn">Перейти в личный кабинет</a>