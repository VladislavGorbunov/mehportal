@extends('layouts.admin-panel')

@section('title', 'Панель администратора - заявки на премиум')
@section('description', 'Панель администратора - заявки на премиум')

@section('content')
    <h2 class="fs-4">Заявки на Premium от исполнителей</h2>
        <x-site.message />
        
        @foreach ($requests as $request)
        <div class="col-12 mt-3 mb-3 border rounded p-3">
            <p>ID исполнителя: {{ $request->executor_id }}</p>
            <p>Организация: {{ $request->title }} </p>
            <p>ИНН: {{ $request->inn }} </p>
            <p>Подключение на: {{ $request->tariff_months}} мес.</p>
            <p>Счёт на сумму: {{ $request->price }} руб.</p>
            <p>Email для отправки счёта: {{ $request->email }}</p>

            <a href="{{ Route('premium-executor-request-delete', ['id' => $request->id]) }}" class="btn btn-blue"><small>Удалить заявку</small></a>
        </div>
        @endforeach 

        {{ $requests->links() }}
@endsection