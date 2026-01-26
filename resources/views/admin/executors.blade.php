@extends('layouts.admin-panel')

@section('title', 'Панель администратора - исполнители')
@section('description', 'Панель администратора - исполнители')

@section('content')
    <h2 class="fs-4 mb-3">{{ $title }}</h2>
        <x-site.message />
        
            @foreach ($executors as $executor)
                <div class="col-12 mt-2 mb-3 border rounded p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>ID в системе: {{ $executor->id }}</p> 
                            <p>Имя: {{ $executor->name }}</p>
                            <p>Фамилия: {{ $executor->lastname }}</p>
                            <p>Телефон: {{ $executor->phone }}</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <p>Email: {{ $executor->email }}</p> 
                            <p>Premium статус: {{ $executor->premium ? 'Да' : 'Нет' }}</p>
                            @if ($executor->premium)
                                <p>Дата окончания Premium: {{ date('d.m.Y', strtotime($executor->premium_end_date)) }}</p>
                            @endif
                            <p>Дата регистрации: {{ date('d.m.Y', strtotime($executor->created_at)) }}</p>
                            @if (!empty($executor->executorCompanies))
                                <p>Связанная организация: <a href="{{ Route('admin-executor-company-edit', ['id' => $executor->executorCompanies->id]) }}">{{ $executor->executorCompanies->legal_form }} {{ $executor->executorCompanies->title }}</a></p>
                            @else
                                <p>Связанная организация: -</p>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <a href="{{ Route('admin-executor-edit', ['id' => $executor->id]) }}" class="btn btn-primary py-2 mt-2">Изменить</a>
                    <a href="{{ Route('admin-executor-delete', ['id' => $executor->id]) }}" class="btn btn-danger py-2 mt-2">Удалить</a>
                </div>
            @endforeach

        <div class="mb-4">
            {{ $executors->links() }}
        </div>
@endsection