@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

    <div class="row mt-4">

        <p class="text-center mb-4">Если у Вас есть какие-либо вопросы или предложения, напишите нам в онлайн чат или на электронную почту, обязательно ответим в рабочее время с 9:00 до 21:00 по МСК</p>

        <div class="col-12 col-md-6">
            <h3 class="fs-4 mb-3">Контакты и реквизиты</h3>
            <p><b>Наш адрес:</b> Россия, г. Санкт-Петербург</p>
            <p><b>Email:</b> <a href="mailto::info@mehportal.ru">info@mehportal.ru</a></p>
            <p><b>Тех. поддержка:</b> <a href="mailto::tech@mehportal.ru">tech@mehportal.ru</a></p>
        </div>

        <div class="col-12 col-md-5 mb-6">
            <h3 class="fs-4 mb-3">Мы в социальных сетях</h3>
            <p><b>Мы ВКонтакте:</b> <a href="https://vk.com/mehportalru" rel="nofollow" target="_blank">https://vk.com/mehportalru</a></p>
            <p><b>Мы в Telegram:</b> <a href="https://t.me/mehport" rel="nofollow" target="_blank">https://t.me/mehport</a></p>

            <div class="row">
                <div class="col-4">
                    <img src="/images/vk-qr.png" class="img-fluid" alt="МехПортал - QR код на канал в Телеграм">
                </div>

                <div class="col-4">
                    <img src="/images/tg-qr.jpg" class="img-fluid" alt="МехПортал - QR код на канал в Телеграм">
                </div>
            </div>
        </div>

       
    </div>

@endsection