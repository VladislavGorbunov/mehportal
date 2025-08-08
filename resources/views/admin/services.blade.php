@extends('layouts.admin-panel')

@section('title', 'Панель администратора - услуги')
@section('description', 'Панель администратора - услуги')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Редактирование услуг</h2> <a href="{{ Route('admin-service-add') }}" class="btn btn-blue">Добавить услугу</a>
</div>
        <x-site.message />
        <div class="row mt-2">
            @foreach ($services as $service)
                <div class="col-12 col-md-6 mt-2 mb-2">
                    <div class="col-12 border rounded px-3 py-2">
                        <a href="{{ Route('admin-service-edit', ['id' => $service->id]) }}">{{ $service->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
@endsection