@extends('layouts.admin-panel')

@section('title', 'Панель администратора - редактирование компании заказчика')
@section('description', 'Панель администратора - редактирование компании заказчика')

@section('content')
<div class="mb-4">
    <h2 class="fs-4 mb-3">Редактирование компании заказчика</h2>
        <x-site.message />
        <x-site.errors />
        <form action="/admin/customer/company/update" method="POST">
        @csrf
        <div class="row">
            <input type="text" name="company_id" value="{{ $company->id }}" hidden />
            <p>ID компании в системе: {{ $company->id }}</p>
            <div class="col-12 col-md-6">
                <input type="text" name="id" value="{{ $company->id }}" hidden>
                
                <div class="mb-3">
                    <label class="form-label">Правовая форма:</label>
                    <select class="form-select" name="legal_form">
                        @foreach ($legal_forms as $legal_form)
                            @if ($legal_form->name == $company->legal_form)
                                <option selected>{{ $legal_form->name }}</option>
                            @else
                                <option>{{ $legal_form->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Название:</label>
  					<input type="text" class="form-control" name="title" value="{{ $company->title }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">ИНН:</label>
  					<input type="text" class="form-control" name="inn" value="{{ $company->inn }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Регион:</label>
  					<select class="form-select" name="region_id">
                        @foreach ($regions as $region)
                            @if ($region->id == $company->region_id)
                                <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                            @else
                                <option value="{{ $region->id }}" >{{ $region->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Контактное лицо:</label>
  				    <input type="text" class="form-control" name="contact_person" value="{{ $company->contact_person }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон:</label>
  				    <input type="tel" class="form-control" name="phone" value="{{ $company->phone }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Добавочный:</label>
  				    <input type="text" class="form-control" name="extension_number" value="{{ $company->extension_number }}" >
                </div>
            
                <div class="mb-3">
                    <label class="form-label">Email:</label>
  				    <input type="email" class="form-control" name="email" value="{{ $company->email }}" >
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Адрес:</label>
  				<input type="text" class="form-control" name="address" value="{{ $company->address }}" >
            </div>


            <div class="mb-3">
                <label class="form-label">Описание:</label>
                <textarea class="form-control" rows="3" name="description">{{ $company->description }}</textarea>
            </div>
        </div>
        
        <hr>
        <button type="submit" class="btn btn-blue py-2 mt-2">Сохранить изменения</button>
        </form>   
</div>      
@endsection