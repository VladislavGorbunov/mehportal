<x-site.top-menu />

<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          Выбрать регион
        @endif
    </button>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
            <a href="#orders" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="#categories-services-modal">ЗАКАЗЫ</a>
        </li>
        <li class="nav-item">
            <a href="#companies" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="#companies">ПРЕДПРИЯТИЯ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-blue" href="#companies">ПОСТАВЩИКИ</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ Route('contacts') }}">Контакты</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ Route('tariffs') }}">Тарифы</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ Route('blog') }}">Блог</a>
        </li>
    </ul>

    <div class="d-flex justify-content-around align-items-center">
        @if (Auth::guard('customer')->check())
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Заказчик</a>
        @else
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Заказчикам</a>
        @endif
          
        @if (Auth::guard('executor')->check())
            <a href="{{ Route('login-executor') }}" class="btn btn-dark" target="_blank">Исполнитель</a>
        @else
            <a href="{{ Route('login-executor') }}" class="btn btn-dark" target="_blank">Исполнителям</a>
        @endif
    </div>
    </div>
  </div>
</nav>