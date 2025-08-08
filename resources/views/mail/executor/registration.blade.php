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
    <ol>Добавьте информацию о вашей организации.</ol>
    <ol>Получайте заказы и предложения от заказчиков</ol>
</ul>
<br>

Ваш логин для входа: {{ $executorLogin }}<br>
Ваш пароль: {{ $executorPassword }} <br>

<a href="https://mehportal.ru/executor" class="btn">Перейти в личный кабинет</a>