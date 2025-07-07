@extends('layouts.admin-panel')

@section('title', 'Панель администратора - Подключение Premium тарифа заказчика')
@section('description', 'Панель администратора - Подключение Premium тарифа заказчика')

@section('content')
    <h2 class="fs-4 mb-3">Подключение Premium тарифа заказчика</h2>
    <x-site.message />
    <x-site.errors />
    <div class="mb-4">
        <form action="/admin/customer/premium-activation" method="POST">
        @csrf

            @if (empty($customer->customerCompanies))
                <div class="alert alert-warning text-center">У заказчика не добавлена организация!</div>
            @endif 

            <div class="row">
                <div class="col-12 col-md-6">
                    <p>ID заказчика в системе: {{ $customer->id }}</p>
                    <p>Имя заказчика: {{ $customer->name }}</p>
                    <p>Фамилия заказчика: {{ $customer->lastname }}</p>
                </div>

                <div class="col-12 col-md-6">
                    @if (! empty($customer->customerCompanies))
                        <p>Организация: {{ $customer->customerCompanies->legal_form }} {{ $customer->customerCompanies->title }}</p>
                        <p>ИНН организации: {{ $customer->customerCompanies->inn }}</p>
                        <p>Контактное лицо: {{ $customer->customerCompanies->contact_person }}</p>
                        <p>Email: {{ $customer->customerCompanies->email }}</p>
                        <p>Телефон: {{ $customer->customerCompanies->phone }}</p>
                        <p>Добавочный: {{ $customer->customerCompanies->extension_numer }}</p>
                    @endif
                </div>
                
            </div>
           
            <input type="text" name="id" value="{{ $customer->id }}" hidden>
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