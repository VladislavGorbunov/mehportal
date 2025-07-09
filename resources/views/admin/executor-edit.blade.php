@extends('layouts.admin-panel')

@section('title', 'Панель администратора - редактирование исполнителя')
@section('description', 'Панель администратора - редактирование исполнителя')

@section('content')
    <h2 class="fs-4 mb-3">Редактирование профиля исполнителя</h2>
        <x-site.message />
        <x-site.errors />
        <form action="/admin/executor/update" method="POST">

        @csrf
        <div class="row">
            <p>ID заказчика в системе: {{ $executor->id }}</p>
            <div class="col-12 col-md-6">
                <input type="text" name="id" value="{{ $executor->id }}" hidden>
                <div class="mb-3">
                    <label class="form-label">Имя:</label>
  					<input type="text" class="form-control" name="name" value="{{ $executor->name }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Фамилия:</label>
  					<input type="text" class="form-control" name="lastname" value="{{ $executor->lastname }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон:</label>
  					<input type="tel" class="form-control" name="phone" value="{{ $executor->phone }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
  					<input type="email" class="form-control" name="email" value="{{ $executor->email }}" >
                </div>
            </div>

            <div class="col-12 col-md-6">

                <div class="mb-3">
                    <label class="form-label">Активный:</label>
  	
                    <select class="form-select" name="active">
                        @if ($executor->active)
                            <option value="1" selected>Активный</option>
                            <option value="0">Не активный</option>
                        @else
                            <option selected value="0">Не активный</option>
                            <option value="1">Активный</option>
                        @endif
                    </select>
                </div>
                <?php
                    // $date = date('Y-m-d');
                    // $dateAt = strtotime('+1 MONTH', strtotime($date));
                    // $newDate = date('Y-m-d', $dateAt);
                    // echo date('d.m.Y', strtotime($newDate));
                ?>
                

                <div class="mb-3">
                    <label class="form-label">Премиум статус:</label>
                    @if ($executor->premium)
  					    <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" value="Подключен" disabled>
                            </div>
                        </div>
                    @else
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" value="Нет" disabled>
                        </div>
                        
                        <div class="col-6">
                            <p class="mt-0 mb-0"><a href="/admin/executor/premium-set/{{ $executor->id }}" class="btn btn-blue">Подключить</a></p>
                        </div>
                    </div>
                    @endif
                </div>

                @if ($executor->premium)
                <div class="mb-3">
                    <label class="form-label">Дата подключения Premium:</label>
  					    <input type="text" class="form-control" value="{{ date('d.m.Y', strtotime($executor->premium_start_date)) }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Дата окончания Premium:</label>
  					    <input type="text" class="form-control" value="{{ date('d.m.Y', strtotime($executor->premium_end_date))}}" disabled>
                </div>
                @endif
            </div>
        </div>
        <h5 class="fs-5 mt-3">Организация:</h5>
        @if (! empty($executor->executorCompanies))
            <p>Организация: {{ $executor->executorCompanies->legal_form }} {{ $executor->executorCompanies->title }}</p>
            <p>ИНН организации: {{ $executor->executorCompanies->inn }}</p>
        @endif
        <hr>
        <button type="submit" class="btn btn-blue py-2 mt-2">Сохранить изменения</button>
        </form>   
        
@endsection