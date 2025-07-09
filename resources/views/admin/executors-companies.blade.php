@extends('layouts.admin-panel')

@section('title', 'Панель администратора - компании исполнителей')
@section('description', 'Панель администратора - компании исполнителей')

@section('content')
    <h2 class="fs-4 mb-3">{{ $title }}</h2>
        <x-site.message />
        
            @foreach ($executors_companies as $company)
                <div class="col-12 mt-2 mb-3 border rounded p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>ID в системе: {{ $company->id }}</p> 
                            <p>Название: {{ $company->legal_form }} {{ $company->title }}</p>
                            <p>ИНН: {{ $company->inn }}</p>
                            <p>Адрес: {{ $company->address }}</p>
                            <p>Контактное лицо: {{ $company->contact_person }}</p> 
                        </div>

                        <div class="col-12 col-md-6">
                            <p>Телефон: {{ $company->phone }} Доб.: {{ $company->extension_number }}</p> 
                            <p>Email: {{ $company->email }}</p> 
                            <p>Активирована: {{ $company->active ? 'Да' : 'Нет' }}</p>
                            <p>Дата добавления: {{ date('d.m.Y', strtotime($company->created_at)) }}</p>
                            <p>Профиль заказчика: <a href="{{ Route('admin-executor-edit', ['id' => $company->executor->id]) }}">{{ $company->executor->name }} {{ $company->executor->lastname }}</a></p>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ Route('admin-customer-company-edit', ['id' => $company->id]) }}" class="btn btn-blue py-2 mt-2">Изменить</a>
                </div>
            @endforeach

        {{ $executors_companies->links() }}
@endsection