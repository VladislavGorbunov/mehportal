<footer class="pt-4 pb-4 pt-md-5 border-top">
    <div class="container">
    	<div class="row">
      		<div class="col-12 col-md-3 text-center">
        		<x-site.logo />
        	
			<p class="text-light mt-2"><small>Наш сервис создан для быстрого и удобного поиска заказчиков и исполнителей
            на различные услуги по металлообработке во всех регионах России.</small>
        	</p>
      		</div>

      		<div class="col-6 col-md-3 text-center mt-3 mt-md-0">
        		<h5>Заказчикам</h5>
        		<ul class="list-unstyled text-small">
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('customer-index') }}">Личный кабинет</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('add-order') }}">Разместить заказ</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('tariffs') }}">Тарифные планы</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Вопросы-ответы</a></li>
        		</ul>
      		</div>
      		
			<div class="col-6 col-md-3 text-center  mt-3 mt-md-0">
        		<h5>Исполнителям</h5>
        		<ul class="list-unstyled text-small">
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('executor-index') }}">Личный кабинет</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#categories-services-modal">Найти заказ</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('tariffs') }}">Тарифные планы</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Реклама на сайте</a></li>
        		</ul>
      		</div>

      		<div class="col-12 col-md-3 text-center  mt-3 mt-md-0">
        		<h5>Информация</h5>
        		<ul class="list-unstyled text-small">
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('contacts') }}">Наши контакты</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Реквизиты</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Оплата</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Договор-оферта</a></li>
          			<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Политика конфиденциальности</a></li>
        		</ul>
      		</div>

      		<div class="col-12 text-center text-light mt-3">
				МЕХПОРТАЛ © <?php echo date('Y') ?> г. - сервис поиска заказов на металлообработку и не только.
			</div>
    	</div>
	</div>

    <div class="cookie-modal ">
	<div class="container cookie-modal-container d-flex align-items-center justify-content-around">
      <div><img src="/images/cookie-icon.svg" class="cookie-icon" alt="Мы используем файлы cookie"></div>
      <div>Мы используем файлы cookie, они помогают нам делать этот сайт удобнее для пользователя.</div>
      <div class="mx-2"><button class="btn btn-cookie-ok">Хорошо</button></div></div>
    </div>

    <x-modal-regions />
    <x-services-orders :region-slug="$regionSlug" />
    <x-companies :region-slug="$regionSlug" />

	<div class="footer-light"></div>
  </footer>