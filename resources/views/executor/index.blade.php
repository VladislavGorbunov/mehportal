@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - МЕХПОРТАЛ')
@section('description', 'Панель исполнителя - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Личный кабинет исполнителя</h2>
        <x-site.message />
        @if (empty($company)) 
            <div class="alert alert-primary text-center mt-3">Добавьте информацию о вашей компании.
                    <a href="{{ Route('executor-add-company') }}" class="btn btn-blue mx-2">Добавить компанию</a>
            </div>
        @endif
@endsection