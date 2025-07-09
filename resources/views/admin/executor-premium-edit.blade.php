@extends('layouts.admin-panel')

@section('title', 'Панель администратора - Подключение Premium тарифа исполнителя')
@section('description', 'Панель администратора - Подключение Premium тарифа исполнителя')

@section('content')
    <h2 class="fs-4 mb-3">Подключение Premium тарифа исполнителя</h2>
    <x-site.message />
    <x-site.errors />
    <div class="mb-4">
        <form action="/admin/executor/premium-activation" method="POST">
        @csrf

            @if (empty($executor->executorCompanies))
                <div class="alert alert-warning text-center">У исполнителя не добавлена организация!</div>
            @endif 

            <div class="row">
                <div class="col-12 col-md-6">
                    <p>ID исполнителя в системе: {{ $executor->id }}</p>
                    <p>Имя исполнителя: {{ $executor->name }}</p>
                    <p>Фамилия исполнителя: {{ $executor->lastname }}</p>
                </div>

                <div class="col-12 col-md-6">
                    @if (! empty($executor->executorCompanies))
                        <p>Организация: {{ $executor->executorCompanies->legal_form }} {{ $executor->executorCompanies->title }}</p>
                        <p>ИНН организации: {{ $executor->executorCompanies->inn }}</p>
                        <p>Контактное лицо: {{ $executor->executorCompanies->contact_person }}</p>
                        <p>Email: {{ $executor->executorCompanies->email }}</p>
                        <p>Телефон: {{ $executor->executorCompanies->phone }}</p>
                        <p>Добавочный: {{ $executor->executorCompanies->extension_numer }}</p>
                    @endif
                </div>
                
            </div>
           
            <input type="text" name="id" value="{{ $executor->id }}" hidden>
                <div class="mb-3">
                    <label class="form-label">Тариф:</label>
  					<select class="form-select" name="tariff_months">
                        @foreach ($tariffs as $tariff)
                            <option value="{{ $tariff->months }}">Тариф: {{ $tariff->title }} | Сроком на: {{ $tariff->months }} мес. | Стоимость: {{ $tariff->price }} руб.</option>
                        @endforeach
                    </select>
                </div>

            <div class="mb-3">
                <label class="form-label">Номер выставленного счёта:</label>
                <input class="form-control" type="text" name="payment_invoice" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Примечание:</label>
                <textarea class="form-control" name="note" rows="3" required></textarea>
            </div>
            
        <button type="submit" class="btn btn-blue py-2 mt-2">Сохранить изменения</button>
        </form>   
    </div>
        
@endsection