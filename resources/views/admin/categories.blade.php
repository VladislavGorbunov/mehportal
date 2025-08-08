@extends('layouts.admin-panel')

@section('title', 'Панель администратора - категории')
@section('description', 'Панель администратора - категории')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Редактирование категорий</h2> <a href="{{ Route('admin-category-add') }}" class="btn btn-blue">Добавить категорию</a>
</div>
        <x-site.message />
        <div class="row mt-2">
            @foreach ($categories as $category)
                <div class="col-12 col-md-6 mt-2 mb-2">
                    <div class="col-12 border rounded p-3">
                        <a href="{{ Route('admin-category-edit', ['id' => $category->id]) }}">{{ $category->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
@endsection