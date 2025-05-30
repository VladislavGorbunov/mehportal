@extends('layouts.login')

@section('title', 'МЕХПОРТАЛ - авторизация заказчика')
@section('description', 'Вход в личный кабинет для заказчика')

@section('content')

<x-customer.login-customer />

@endsection