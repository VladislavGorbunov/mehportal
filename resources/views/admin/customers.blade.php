@extends('layouts.admin-panel')

@section('title', 'Панель администратора - МЕХПОРТАЛ')
@section('description', 'Панель администратора - МЕХПОРТАЛ')

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
                                <p>Связанная организация: {{ $customer->customerCompanies->legal_form }} {{ $customer->customerCompanies->title }}</p>
                            @else
                                <p>Связанная организация: -</p>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <a href="{{ Route('admin-customer-edit', ['id' => $customer->id]) }}" class="btn btn-blue py-2 mt-2">Изменить</a>
                </div>
            @endforeach

            
        {{ $customers->links() }}
@endsection