<footer class="pt-4 pb-4 pt-md-5">
    <div class="container">
    	<div class="row">
    	    <div class="col-6 col-md-3 text-center  mt-3 mt-md-0">
    	        <div class="footer-logo">
    	            <div class="footer-logo-light"></div>
        		    <h5 class="navbar-brand">МЕХПОРТАЛ</h5>
        		</div>
        		<p class="text-light small-text">Современный онлайн-сервис для поиска исполнителей и заказов на услуги по обработке металла по всей России.</p>
        	    <span class="text-white"><small>
                ИНН 781712777173</small></span>
      		</div>
    	    
    	    
      		<div class="col-6 col-md-3 text-center mt-3 mt-md-0">
        		<h5>Заказчикам</h5>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('customer-index') }}">Личный кабинет</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="/add-order">Разместить заказ</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('tariffs') }}">Тарифные планы</a></p>
      		</div>
      		
			<div class="col-6 col-md-3 text-center  mt-3 mt-md-0">
        		<h5>Исполнителям</h5>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('executor-index') }}">Личный кабинет</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('executor-add-company') }}">Добавить компанию</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('tariffs') }}">Тарифные планы</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#categories-services-modal">Найти заказ</a></p>
      		</div>
      		

      		<div class="col-6 col-md-3 text-center  mt-3 mt-md-0">
        		<h5>Информация</h5>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('contacts') }}">Наши контакты</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('dogovor') }}">Договор-оферта</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('privacy-policy') }}">Политика конфиденциальности</a></p>
      		</div>

      		<div class="col-12 text-center text-light mt-5">
				МЕХПОРТАЛ © <?php echo date('Y') ?> г. - сервис поиска заказов на металлообработку и не только.<br>
				
				<a href="https://icons8.com" class="text-secondary mb-3" rel="nofollow">icons8.com</a>
				<a href="https://www.flaticon.com/free-icons/cnc-machine" class="text-secondary mb-3" title="cnc machine icons" rel="nofollow">Cnc machine icons created by Design Circle - Flaticon</a>
				<div class="mt-2"><x-site.liveinternet /></div>
			</div>
    	</div>
	</div>

    <div class="cookie-modal">
	<div class="container cookie-modal-container d-flex align-items-center justify-content-around">
      <div><img src="/images/cookie-icon.svg" class="cookie-icon" alt="Мы используем файлы cookie."></div>
      <div>Мы используем файлы cookie, они помогают нам делать этот сайт удобнее для пользователя.</div>
    </div>
    </div>
    
    <x-modal-regions />
    <x-services-orders :region-slug="$regionSlug" />
    <x-companies :region-slug="$regionSlug" />
	<x-site.modal-reg-cp />
	<x-site.modal-reg-cp-no-premium />
	<x-site.modal-add-company-cp />

    <div class="scroll-top text-center"><i class="bi bi-arrow-up-square-fill"></i><p>НАВЕРХ</p></div>
    
    <script>
        const scrollBtn = document.querySelector('.scroll-top')
        const cookieModal = document.querySelector('.cookie-modal')
        
        scrollBtn.style.display = 'none'
        
        window.addEventListener('scroll', function() {
            if (pageYOffset < 650) {
                scrollBtn.style.display = 'none'
                cookieModal.style.display = 'block'
            } else {
                scrollBtn.style.display = 'block'
                cookieModal.style.display = 'none'
            }
        });
        
        scrollBtn.addEventListener('click', () => {
            window.scrollTo(0, 0)
        })
    </script>

	<div class="footer-light"></div>
  </footer>