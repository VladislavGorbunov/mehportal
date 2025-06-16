@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - добавить заказ')
@section('description', 'Панель заказчика - добавить заказ')

@section('content')

<h2 class="fs-4">Добавление заказа</h2>

<x-customer.add-order-form :categoriesServices="$categories_services"/>
@endsection