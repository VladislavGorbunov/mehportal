@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - добавить компанию')
@section('description', 'Панель заказчика - добавить компанию')

@section('content')

<h2 class="fs-4">Добавление организации заказчика</h2>
    <form method="post">
    @csrf
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Организационно-правовая форма:</label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($legal_forms as $legal_form)
                                @if (old('legal_form') == $legal_form->name)
                                    <option value="{{ $legal_form->name }}" selected>{{ $legal_form->name }} - {{ $legal_form->full_name }}</option>
                                @else
                                    <option value="{{ $legal_form->name }}">{{ $legal_form->name }} - {{ $legal_form->full_name }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>

				<div class="mb-3">
  					<label class="form-label">Название организации:</label>
  					<input type="text" class="form-control" placeholder="Например: «ТехноСистемы»">
				</div>

				<div class="mb-3">
  					<label class="form-label">ИНН организации:</label>
  					<input type="text" class="form-control" placeholder="Например: 178081376893">
				</div>

				<div class="mb-3">
                    <label class="form-label">Регион:</label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($regions as $region)
                                @if (old('region') == $region->id)
                                    <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                                @else
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>

				<div class="mb-3">
  					<label class="form-label">Адрес:</label>
  					<input type="text" class="form-control" placeholder="Например: Санкт-Петербург, Боровая улица, д. 51 ">
				</div>
            </div>

            <div class="col-12 col-md-6">
				<div class="mb-3">
  					<label class="form-label">Контактное лицо (Ф.И.О):</label>
  					<input type="text" class="form-control" placeholder="Например: Иванов Евгений Владимирович">
				</div>

				<div class="mb-3">
  					<label class="form-label">Телефон контактного лица:</label>
  					<input type="tel" class="form-control" placeholder="Например: +7 (123) 456-78-90">
				</div>

				<div class="mb-3">
  					<label class="form-label">Добавочный номер при наличии:</label>
  					<input type="number" class="form-control" placeholder="Например: 363">
				</div>

				<div class="mb-3">
  					<label class="form-label">Email контактного лица:</label>
  					<input type="email" class="form-control" placeholder="Например: 363">
				</div>
            </div>
        </div>

		<button type="submit" class="btn btn-blue mt-3 mb-3">Добавить организацию</button>
    </form>
@endsection