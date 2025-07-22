@extends('layouts.admin-panel')

@section('title', 'Панель администратора - редактирование категории')
@section('description', 'Панель администратора - редактирование категории')

@section('content')
    <h2 class="fs-4">Редактирование категории</h2>
        <x-site.message />
        <div class="mt-3">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Название категории:</label>
                    <input type="text" class="form-control" placeholder="" name="title" value="{{ $category->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Название категории (на какую услугу):</label>
                    <input type="text" class="form-control" placeholder="" name="title_case" value="{{ $category->title_case }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">URL:</label>
                    <input type="text" class="form-control" placeholder="" name="slug" value="{{ $category->slug }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание:</label>
                    <textarea class="form-control" rows="6" name="description">{{ $category->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Активная категория:</label>
                    <select class="form-select" name="active">
                        @if ($category->active)
                            <option selected value="1">Да</option>
                            <option value="0">Нет</option>
                        @else
                            <option selected value="0">Нет</option>
                            <option value="1">Да</option>
                        @endif
                    </select>
                </div>

                <button type="submit" class="btn btn-blue">Сохранить</button>
            </form>
        </div>
@endsection