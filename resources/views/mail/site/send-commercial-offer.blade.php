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
<h1>По вашему заказу есть новое коммерческое предложение!</h1>
<br>
<p>Коммерческое предложение поступило на заказ: {{ $order_name }}</p>
<p>Предложение от компании: {{ $company_name }}</p>
<p>Регион компании: {{ $company_region }}</p>
<br>
<a href="https://mehportal.ru/customer" class="btn">Перейти в личный кабинет</a>