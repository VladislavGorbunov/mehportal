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
<h1>Новый заказ на сайте МехПортал</h1>

<ul>
    <ol>ID пользователя: {{ $id }}</ol>
    <ol>Заказ: {{ $order_title }}</ol>
    <ol>ID заказа: {{ $order_id }}</ol>
</ul>
<br>

<a href="https://mehportal.ru/admin" class="btn">Перейти в админ-панель</a>