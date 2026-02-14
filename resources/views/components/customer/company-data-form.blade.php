<x-site.errors />
<x-site.message />
<div class="alert alert-warning text-center mt-3">Все поля обязательны для заполнения.</div>
    <form method="post">
    @csrf
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Организационно-правовая форма:</label>
                        <select class="form-select" name="legal_form">
                            @foreach ($legalForms as $legal_form)
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
  					<input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Например: «ТехноСистемы»">
				</div>
				
				<div class="mb-3">
                    <label class="form-label">Регион:</label>
                        <select class="form-select" name="region_id">
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
  					<label class="form-label">ИНН организации:</label>
  					<input type="text" class="form-control" name="inn" value="{{ old('inn') }}" placeholder="Например: 178081376893">
				</div>

				<div class="mb-3">
  					<label class="form-label">Адрес:</label>
  					<input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Например: Санкт-Петербург, Боровая улица, д. 51 ">
				</div>
            </div>

            <div class="col-12 col-md-6">
				<div class="mb-3">
  					<label class="form-label">Контактное лицо (Ф.И.О):</label>
  					<input type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}" placeholder="Например: Иванов Евгений Владимирович">
				</div>

				<div class="mb-3">
  					<label class="form-label">Телефон контактного лица:</label>
  					<input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Например: +7 (123) 456-78-90">
				</div>

				<div class="mb-3">
  					<label class="form-label">Добавочный номер при наличии:</label>
  					<input type="number" class="form-control" name="extension_number" value="{{ old('extension_number') }}" placeholder="Например: 363">
				</div>

				<div class="mb-3">
  					<label class="form-label">Email контактного лица:</label>
  					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Например: petrov-dmk@mail.ru">
				</div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Описание компании:</label>
            <textarea class="form-control" name="description" rows="6">{{ old('description') }}</textarea>
        </div>

		<button type="submit" class="btn btn-blue mt-3 mb-3">Добавить организацию</button>
    </form>