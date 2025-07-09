@extends('layouts.admin-panel')

@section('title', 'Панель администратора - МЕХПОРТАЛ')
@section('description', 'Панель администратора - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Личный кабинет администратора</h2>
        <x-site.message />
        Выручка за всё время с Premium заказчиков: {{ $premium_customers_sum }} руб.
@endsection