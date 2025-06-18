@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
    <x-site.companies />
    <x-site.for-created />
    <h2 class="text-center mt-4">Открытые заказы на сегодня</h2>

    @foreach ($orders as $order)
        <x-site.order-block :order="$order"/>
    @endforeach
@endsection