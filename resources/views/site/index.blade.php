@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
    <x-site.companies />
    <x-site.for-created />
    <h2 class="text-center mt-5">Открытые заказы на сегодня</h2>
@endsection