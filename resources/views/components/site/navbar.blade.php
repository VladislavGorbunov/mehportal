<style>
  .top-menu {
    width: 100%;
    background:linear-gradient(90deg, rgb(12, 13, 13), rgb(33, 34, 36));
  }

  .top-menu-block {
        min-height: 46px;
        padding: 8px 0px;
  }

  .top-menu a{
    color:rgba(227, 232, 237, 0.8);
    font-size: 13px;
  }

  .badge-us {
    position: relative;
    left: -8px;
    background:rgb(57, 174, 96);
    color: #fff;
    font-size: 10px;
    padding: 2px 10px;
    border-radius: 15px 6px;
  }
</style>
<div class="top-menu">
    <div class="container">
        <div class="top-menu-block text-center d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <!-- <span>Скидка 20% для всех новых исполнителей, при подключении тарифа «Профессионал» на 12 месяцев</span><a href="{{ Route('login-executor') }}" class="buy-tarif-top-menu ms-2" target="_blank">Подключиться</a> -->
        <div class="d-flex gap-3">
          <a href="">О проекте «МехПортал»</a>
          <a href="">Обратная связь</a>
          <a href="">Реклама на сайте</a>
          <a href="">FAQ</a>
          <a href="">Правовые документы</a>
          <a href="">Полезные калькуляторы</a><span class="badge-us">Скоро</span>
        </div>

        <div class="d-flex gap-3">
          <a href="">info@mehportal.ru</a>
          <a href=""><img src="/images/vk.svg"></a>
          <a href=""><img src="/images/telegram.svg"></a>

        </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
  <div class="container">
    <x-site.logo />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <button type="button" class="btn btn-modal-city my-3 my-md-0 mx-md-2 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        
    <i class="bi bi-cursor-fill"></i>
        @if ($regionName) 
          {{ $regionName }}
        @else
          Выбрать город
        @endif
    </button>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="#orders" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="#categories-services-modal">
            Заказы
          </a>
        </li>
        <li class="nav-item">
          <a href="#companies" class="nav-link link-blue" href="#companies" data-bs-toggle="modal" data-bs-target="#companies">Предприятия</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-blue" href="#companies">Поставщики</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/tariffs">Контакты</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/tariffs">Тарифы</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#companies">Блог</a>
        </li>
        
        
      </ul>
        <div class="d-flex justify-content-around align-items-center">
          @if (Auth::guard('customer')->check())
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Мой кабинет</a>
          @else
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Заказчикам</a>
          @endif
          
          @if (Auth::guard('executor')->check())
            <a href="{{ Route('login-executor') }}" class="btn btn-dark" target="_blank">Мой кабинет</a>
          @else
            <a href="{{ Route('login-executor') }}" class="btn btn-dark" target="_blank">Исполнителям</a>
          @endif
        </div>
    </div>
  </div>
</nav>