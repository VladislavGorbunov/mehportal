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
<h1>Вы зарегистрированы на сайте МехПортал</h1>

<ul>
    <ol>Добавьте информацию о компании.</ol>
    <ol>Добавляйте объявления о продаже товаров.</ol>
</ul>
<br>

Ваш логин для входа: {{ $sellerLogin }}<br>
Ваш пароль: {{ $sellerPassword }} <br>

<a href="https://mehportal.ru/seller" class="btn">Перейти в личный кабинет</a>