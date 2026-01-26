@extends('layouts.admin-panel')

@section('title', 'Панель администратора - заказчики')
@section('description', 'Панель администратора - заказчики')

@section('content')
    <h2 class="fs-4 mb-3">{{ $title }}</h2>
        <x-site.message />
        
            @foreach ($customers as $customer)
                <div class="col-12 mt-2 mb-3 border rounded p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>ID в системе: {{ $customer->id }}</p> 
                            <p>Имя: {{ $customer->name }}</p>
                            <p>Фамилия: {{ $customer->lastname }}</p>
                            <p>Телефон: {{ $customer->phone }}</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <p>Email: {{ $customer->email }}</p> 
                            <p>Premium статус: {{ $customer->premium ? 'Да' : 'Нет' }}</p>
                            @if ($customer->premium)
                                <p>Дата окончания Premium: {{ date('d.m.Y', strtotime($customer->premium_end_date)) }}</p>
                            @endif
                            <p>Дата регистрации: {{ date('d.m.Y', strtotime($customer->created_at)) }}</p>
                            @if (!empty($customer->customerCompanies))
                                <p>Связанная организация: <a href="{{ Route('admin-customer-company-edit', ['id' => $customer->customerCompanies->id]) }}">{{ $customer->customerCompanies->legal_form }} {{ $customer->customerCompanies->title }}</a></p>
                            @else
                                <p>Связанная организация: -</p>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <a href="{{ Route('admin-customer-edit', ['id' => $customer->id]) }}" class="btn btn-primary py-2 mt-2">Изменить</a>
                    <a href="{{ Route('admin-add-order', ['id' => $customer->id]) }}" class="btn btn-primary py-2 mt-2">Добавить заказ</a>
                    <a href="{{ Route('admin-customer-delete', ['id' => $customer->id]) }}" class="btn btn-danger py-2 mt-2">Удалить</a>
                </div>
            @endforeach

        <div class="mb-4">
            {{ $customers->links() }}
        </div>
@endsection