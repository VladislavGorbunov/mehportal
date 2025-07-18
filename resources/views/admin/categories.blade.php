@extends('layouts.admin-panel')

@section('title', 'Панель администратора - категории')
@section('description', 'Панель администратора - категории')

@section('content')
    <h2 class="fs-4">Редактирование категорий</h2>
        <x-site.message />
        
        @foreach ($categories as $category)
            <div class="col-12 p-3 border rounded mt-2">
                <a href="/admin/category/edit/{{ $category->id }}">{{ $category->title }}</a>
            </div>
        @endforeach
@endsection