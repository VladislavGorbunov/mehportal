@extends('layouts.login')

@section('title', 'МЕХПОРТАЛ - авторизация исполнителя')
@section('description', 'Вход в личный кабинет исполнителя')

@section('content')

<x-executor.login-executor />

@endsection