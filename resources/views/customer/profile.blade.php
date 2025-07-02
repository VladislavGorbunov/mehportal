@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - профиль')
@section('description', 'Панель заказчика - профиль')

@section('content')

    <h2 class="fs-4">Мой профиль</h2>
        
    <x-customer.profile-edit :customer="$customer" />
   
@endsection