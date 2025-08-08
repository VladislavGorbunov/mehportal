@extends('layouts.admin-panel')

@section('title', 'Панель администратора - добавление услуги')
@section('description', 'Панель администратора - добавление услуги')

@section('content')
    <h2 class="fs-4">Добавление услуги</h2>
        <x-site.errors />
        <x-site.message />
        <div class="mt-3">
            <form action="/admin/service/add" method="POST">
                @csrf
              
                <div class="mb-3">
                    <label class="form-label">Название услуги:</label>
                    <input type="text" class="form-control" placeholder="" name="title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Название услуги (на какую услугу):</label>
                    <input type="text" class="form-control" placeholder="" name="title_case">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Родительская категория:</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">URL:</label>
                    <input type="text" class="form-control" placeholder="" name="slug">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание:</label>
                    <textarea class="form-control" rows="6" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Активная услуга:</label>
                    <select class="form-select" name="active">
                        <option selected value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-blue">Сохранить</button>
            </form>
        </div>
@endsection