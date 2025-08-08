@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>О проекте</small></li>
        </ol>
    </nav>
</div>


<div class="mt-4">

<h2 class="text-center">Mehportal.ru - платформа для металлообработки</h2>

<p>Mehportal.ru — это специализированная онлайн-платформа, которая связывает заказчиков, нуждающихся в услугах металлообработки, 
с надежными и квалифицированными производителями.</p> 

<h2 class="mt-4 mb-2 fs-5">Для заказчиков:</h2>
<ul>
    <li><strong>Размещайте заказы легко:</strong> Опишите свои потребности в металлообработке, укажите детали, чертежи и требования, и отправьте заказ производителям.</li>
    <li><strong>Получайте предложения от разных компаний:</strong> Сравните цены, сроки и условия от различных исполнителей, чтобы выбрать оптимальный вариант.</li>
    <li><strong>Экономьте время и деньги:</strong> Найдите подходящего подрядчика без необходимости обзванивать множество компаний.</li>
    <li><strong>Находите новые технологии и возможности:</strong> Откройте для себя новых поставщиков и современные методы металлообработки.</li>
</ul>

<h2 class="mt-4 mb-2 fs-5">Для производителей:</h2>
<ul>
    <li><strong>Привлекайте новых клиентов:</strong> Разместите информацию о своей компании, оборудовании и услугах, чтобы вас могли найти заказчики со всей страны.</li>
    <li><strong>Получайте целевые заказы:</strong> Находите проекты, соответствующие вашим специализациям и возможностям.</li>
    <li><strong>Увеличьте загрузку производства:</strong> Обеспечьте постоянный поток заказов и оптимизируйте использование ресурсов.</li>
    <li><strong>Расширяйте географию бизнеса:</strong> Привлекайте клиентов из разных регионов и выходите на новые рынки.</li>
    <li><strong>Укрепите свой имидж:</strong> Демонстрируйте свои компетенции и опыт, чтобы завоевать доверие заказчиков.</li>
</ul>

<h2 class="mt-4 mb-2 fs-5">Для поставщиков:</h2>
<ul>
    <li><strong>Привлекайте новых клиентов:</strong> Разместите информацию о своей компании и товарах которые вы продаёте.</li>
    <li><strong>Увеличьте продажи:</strong> Увеличивайте продажи и географию работы, ваши товары увидят все.</li>
</ul>

<style>
    .column {
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 30px 15px;
    }
</style>

<h2 class="mt-4 mb-2 fs-4 text-center">Преимущества нашей платформы</h2>
<div class="row">
    <div class="col-12 col-md-3 p-2 mt-2">
        <div class="col-12 column text-center">
            <img width="100" height="100" src="/images/about/icons8-web-100.png" alt=""/>
            <p><b>Удобный и интуитивно понятный интерфейс</b></p>
        </div>
    </div>
    
    <div class="col-12 col-md-3 p-2 mt-2">
        <div class="col-12 column text-center">
            <img width="100" height="100" src="/images/about/icons8-user-100.png" alt=""/>
            <p><b>Широкий выбор исполнителей и заказчиков</b></p>
        </div>
    </div>
    
    <div class="col-12 col-md-3 p-2 mt-2">
        <div class="col-12 column text-center">
            <img width="100" height="100" src="/images/about/icons8-search-100.png" alt=""/>
            <p><b>Эффективная система поиска и фильтрации</b></p>
        </div>
    </div>
    
    <div class="col-12 col-md-3 p-2 mt-2">
        <div class="col-12 column text-center">
            <img width="100" height="100" src="/images/about/icons8-premium-100.png" alt=""/>
            <p><b>Бесплатный Premium для новых пользователей</p></b>
        </div>
    </div>
    

</div>


<p class="mt-3 mb-1 text-center">МЕХПОРТАЛ — это незаменимый инструмент для всех, кто связан с металлообработкой. Платформа помогает заказчикам находить надежных исполнителей, а производителям — расширять свой бизнес и увеличивать прибыль.
</p>
     
</div>

@endsection