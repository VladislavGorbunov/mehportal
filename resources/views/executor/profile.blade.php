@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - профиль')
@section('description', 'Панель исполнителя - профиль')

@section('content')

    <h2 class="fs-4">Мой профиль</h2>
        
    <x-executor.profile-edit :executor="$executor" />
   
@endsection