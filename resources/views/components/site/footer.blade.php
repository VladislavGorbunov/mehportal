<footer class="pt-4 pb-4 pt-md-5">
    <div class="container">
    	<div class="row">
    	    <div class="col-6 col-md-3 text-center  mt-3 mt-md-0">
    	        <div class="footer-logo">
    	            <div class="footer-logo-light"></div>
        		    <h5 class="navbar-brand">МЕХПОРТАЛ</h5>
        		</div>
        		<p class="text-light small-text mb-0">Современный онлайн-сервис для поиска исполнителей и заказов на услуги по обработке металла по всей России.</p>
        		<p class="text-light small-text">Вся металлообработка страны - на одном сайте!</p>
        	
      		</div>
    	    
    	    
      		<div class="col-6 col-md-3 text-center mt-3 mt-md-0">
        		<h5>Заказчикам</h5>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="{{ Route('customer-index') }}">Личный кабинет</a></p>
          			<p class="mb-1"><a class="link-secondary text-decoration-none" href="/add-order">Разместить заказ на металлообработку</a></p>
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
          			
          			<p class="text-white link-secondary mt-2 mb-1">ИНН 781712777173</p>
                    <p class="text-white link-secondary m-0">info@mehportal.ru</p>
      		</div>

      		<div class="col-12 text-center text-light mt-5">
				МЕХПОРТАЛ.РУ © 2025 - <?php echo date('Y') ?> - современный сервис для поиска и размещения заказов на металлообработку.<br>
				
				Наши партнёры: <a href="https://icons8.com" class="text-light mb-3" rel="nofollow" target="_blank">icons8.com</a> & 
				<a href="https://www.flaticon.com" class="text-light mb-3" rel="nofollow" target="_blank">Flaticon</a>
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
    
   <button type="button" class="add-zakaz d-md-flex flex-column align-items-center justify-content-center">
       <div class="text-center mt-1" data-bs-toggle="modal" data-bs-target="#kakrazmestitzakaz">
           <i class="bi bi-question-circle"></i> Как разместить заказ?
       </div>
   </button>
   
   <!-- Modal -->
<div class="modal fade" id="kakrazmestitzakaz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Как разместить заявку</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>Есть несколько вариантов как добавить заказ на наш сайт.</p>
        <p>Вариант 1. Пришлите на почту <b>zakaz@mehportal.ru</b> данные вашей организации, чертежи, текст заявки и дату сбора заявок.</p>
        <p>Вариант 2. Зарегистрируйтесь на нашем сайте как заказчик, добавьте заказ самостоятельно в личном кабинете.</p>
      </div>
    </div>
  </div>
</div>
        
        <style>
        .bi-question-circle {
            font-size: 15px;
        }
        
        .add-zakaz {
            width: auto;
            padding: 8px 20px;
            position: fixed;
            bottom: 15px;
            left: 10px;
            backdrop-filter: blur(10px);
            background: rgba(0,0,0, 1);
            border: none;
            border-radius: 10px;
            z-index: 4;
            color: #fff;
            overflow: hidden;
        }
    
        </style>
    
    
    <x-modal-regions />
    <x-services-orders :region-slug="$regionSlug" />
    <x-companies :region-slug="$regionSlug" />
	<x-site.modal-reg-cp />
	<x-site.modal-reg-cp-no-premium />
	<x-site.modal-add-company-cp />
	<x-site.modal-cp-deactive />

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