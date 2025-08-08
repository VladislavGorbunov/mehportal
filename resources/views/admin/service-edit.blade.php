@extends('layouts.admin-panel')

@section('title', 'Панель администратора - редактирование услуги')
@section('description', 'Панель администратора - редактирование услуги')

@section('content')
    <h2 class="fs-4">Редактирование услуги</h2>
        <x-site.errors />
        <x-site.message />
        <div class="mt-3">
            <form action="/admin/service/update" method="POST">
                @csrf
                <input type="text" name="id" value="{{ $service->id }}" hidden>
                <div class="mb-3">
                    <label class="form-label">Название:</label>
                    <input type="text" class="form-control" placeholder="" name="title" value="{{ $service->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Название (на какую услугу):</label>
                    <input type="text" class="form-control" placeholder="" name="title_case" value="{{ $service->title_case }}">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Родительская категория:</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                        @if ($category->id == $service->category_id)
                            <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                

                <div class="mb-3">
                    <label class="form-label">URL:</label>
                    <input type="text" class="form-control" placeholder="" name="slug" value="{{ $service->slug }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание:</label>
                    <textarea class="form-control" rows="6" name="description">{{ $service->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Активная услуга:</label>
                    <select class="form-select" name="active">
                        @if ($service->active)
                            <option selected value="1">Да</option>
                            <option value="0">Нет</option>
                        @else
                            <option selected value="0">Нет</option>
                            <option value="1">Да</option>
                        @endif
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-blue">Сохранить</button>
                    <a href="{{ Route('admin-service-delete', ['id' => $service->id]) }}" class="btn btn-delete">Удалить</a>
                </div>
            </form>
        </div>
@endsection