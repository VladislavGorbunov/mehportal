@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Наши контакты</small></li>
        </ol>
    </nav>
</div>

    <div class="row mt-4 mb-5">
        <div class="col-12 col-md-6 mb-4" itemscope itemtype="http://schema.org/Organization">
            <h3 class="fs-4 mb-3">Контакты и реквизиты:</h3>
            <p itemprop="name">МехПортал</p>
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <p><b>Наш адрес:</b> Россия, г. <span itemprop="addressLocality">Санкт-Петербург</span></p>
            </div>
            <p><b>Телефон:</b> <a href="tel::+78129204952"><span itemprop="telephone">+7 (812) 920-49-52</span></a></p>
            <p><b>Режим работы:</b> Ежедневно с 9:00 до 18:00</p>
            <p><b>Email:</b> <a href="mailto::info@mehportal.ru"><span itemprop="email">info@mehportal.ru</span></a> <small>(по любым вопросам)</small></p>
            <p><b>Тех. поддержка:</b> <a href="mailto::tech@mehportal.ru">tech@mehportal.ru</a> <small>(по вопросам работы сайта)</small></p>
            <p><b>ИНН:</b> 781712777173</p>
            <p>ИП Горбунов Владислав Владимирович</p>
            
           
            <p>Есть вопросы или предложения для сотрудничества?<br> Мы всегда на связи в ВК, Телеграм а так же в онлайн чате сайта!</p>

            <h3 class="fs-4 mt-5 mb-3">Мы в социальных сетях:</h3>
            <p><b>Мы ВКонтакте:</b> <a href="https://vk.com/mehportalru" rel="nofollow" target="_blank">https://vk.com/mehportalru</a></p>
            <p><b>Мы в Telegram:</b> <a href="https://t.me/mehport" rel="nofollow" target="_blank">https://t.me/mehport</a></p>

            <div class="row mt-4">
                <div class="col-6 col-md-3">
                    <img src="/images/vk-qr.png" class="img-fluid" alt="МехПортал - QR код на канал в Телеграм">
                </div>

                <div class="col-6 col-md-3">
                    <img src="/images/tg-qr.jpg" class="img-fluid" alt="МехПортал - QR код на канал в Телеграм">
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-6">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa144b1d685110b90bf4dbb0ec0d410b32698ba3b4e5d5a51f74335425b2c00fe&amp;width=auto&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>

       
    </div>

@endsection