@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

    <div class="row mt-5">

        <p class="text-center">Если у Вас есть какие либо вопросы или предложения, напишите нам в онлайн чат или на электронную почту, обязательно ответим в рабочее время с 9:00 до 21:00 по МСК</p>

        <div class="col-12 col-md-4">
            <h3 class="fs-4 mb-3">Контакты и реквизиты</h3>
            <p><b>Адрес:</b> Россия, г. Санкт-Петербург</p>
            <p><b>Email:</b> info@mehportal.ru</p>
            <p><b>Телефон:</b> +7 (812) 920-49-52</p>
            <p><b>ИНН:</b> 7812957834</p>
            <p>ИП Горбунов В.В.</p>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <h3 class="fs-4 mb-3">Мы в социальных сетях</h3>
            <p><b>ВКонтакте:</b> https://vk.com/mehportalru</p>
            <p><b>Telegram:</b> https://t.me/mehport</p>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <img src="/images/tg-qr.jpg" class="col-md-6 img-fluid">
        </div>
    </div>

@endsection