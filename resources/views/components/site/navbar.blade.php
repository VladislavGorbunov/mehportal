<nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
  <div class="container">
    <a class="navbar-brand" href="/">
    <span class="logo-blue-color">МЕХ</span>ПОРТАЛ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <button type="button" class="btn btn-modal-city my-3 my-md-0 mx-md-3 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-cursor-fill"></i>
        Выберите город
    </button>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Поиск заказов</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Предприятия</a>
        </li>
        
      </ul>
        <div class="d-flex justify-content-around align-items-center">
          @if (Auth::guard('customer')->check())
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Личный кабинет</a>
          @else
            <a href="{{ Route('login-customer') }}" class="btn btn-none-bg mx-2" target="_blank">Заказчикам</a>
          @endif
            
            <a class="btn btn-dark">Исполнителям</a>
        </div>
    </div>
  </div>
</nav>