<x-site.top-menu />

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <x-site.logo />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <button type="button" class="btn btn-modal-city my-3 my-md-0 mx-md-3 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        
    <i class="bi bi-cursor-fill"></i>
        @if ($regionName) 
          {{ $regionName }}
        @else
          По всей России
        @endif
    </button>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
            <a href="#orders" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="#categories-services-modal">Заказы</a>
        </li>
        <li class="nav-item">
            <a href="#companies" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="#companies">Предприятия</a>
        </li>
        <li class="nav-item position-relative">
            <a href="" class="nav-link link-blue" data-bs-toggle="modal" data-bs-target="">Поставщики</a>
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
        <div class="btn-group">
            <button type="button" class="btn btn-none-bg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-check-fill"></i> Личный кабинет
            </button>
            
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ Route('login-customer') }}" target="_blank">Я заказчик</a><p style="font-size: 12px;" class="text-secondary">Хочу размещать заказы</p></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ Route('login-executor') }}" target="_blank">Я исполнитель</a><p style="font-size: 12px;" class="text-secondary">Хочу выполнять заказы</p></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ Route('login-supplier') }}" target="_blank">Я поставщик</a><p style="font-size: 12px;" class="text-secondary">Хочу продавать</p></li>

            </ul>
        </div>
    </div>
    </div>
  </div>
</nav>

