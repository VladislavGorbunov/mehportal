<nav class="navbar navbar-customer navbar-expand-lg navbar-light bg-light py-4">
  <div class="container">
    <x-site.logo />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ Route('executor-index') }}">Главная страница</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/" target="_blank">Перейти на портал</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Помощь</a>
        </li>
        
      </ul>
        <div class="d-flex justify-content-around align-items-center">
            <a href="{{ Route('executor-logout') }}" class="btn btn-dark">Выйти</a>
        </div>
    </div>
  </div>
</nav>