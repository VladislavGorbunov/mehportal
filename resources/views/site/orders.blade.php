@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
    <h2 class="text-center mt-4">Открытые заказы</h2>

    @foreach ($orders as $order)
        <x-site.order-block :order="$order"/>
    @endforeach


    {{ $orders->links() }}
@endsection