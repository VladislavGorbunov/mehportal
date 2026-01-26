@extends('layouts.admin-panel')

@section('title', 'Панель администратора - добавление заказчика')
@section('description', 'Панель администратора - добавление заказчика')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Добавление заказчика</h2>
</div>
        <x-site.message />
        <div class="row mt-2">
           
        <form method="post">
            @csrf
           
            <x-site.errors />

            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Имя заказчика:</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Например: Владимир" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Фамилия:</label>
                        <input type="text" class="form-control" value="{{ old('lastname') }}" placeholder="Например: Иванов" name="lastname" required>
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Телефон:</label>
                        <input type="tel" autocomplete="tel" type="text" class="form-control" value="{{ old('phone') }}" placeholder="+7 (123) 456-78-90" name="phone" required>
                    </div>

                </div>

                <div class="col-12 col-md-6">
                
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Например: evgeni-tsk@mail.ru" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Пароль для входа: <small>(не менее 8 символов)</small></label>
                        <input type="password" class="form-control password" placeholder="" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Повторите пароль:</label>
                        <input type="password" class="form-control password-replay" placeholder="" name="password" required>
                    </div>

                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-blue">Добавить</button>
                </div>
            </div>
        </form>
    
        </div>
@endsection