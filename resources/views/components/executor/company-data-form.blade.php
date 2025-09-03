<x-site.errors />
<x-site.message />

    <form method="post" enctype="multipart/form-data">
    @csrf
        <div class="row mt-4">
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
  					<label class="form-label">Название организации: <small>(Без ООО, ИП и кавычек)</small></label>
  					<input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Например: ТехноСистемы или Иванов В.А. ">
				</div>

				<div class="mb-3">
  					<label class="form-label">ИНН организации:</label>
  					<input type="text" class="form-control" name="inn" value="{{ old('inn') }}" placeholder="Например: 178081376893">
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
  					<label class="form-label">Адрес производства:</label>
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

                <div class="mb-3">
  					<label class="form-label">Сайт компании при наличии:</label>
  					<input type="text" class="form-control" name="site" value="{{ old('site') }}" placeholder="Например: https://my-company.ru">
				</div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label mb-0">Описание компании: (минимум 50 символов)</label>
            <p сдфыы=><small>Постарайтесь написать уникальное описание о вашей компании, не копируйте информацию со своего сайта или других сайтов. 
            Опишите своими словами компанию и её преимущества, возможно у вас был уникальный опыт в изготовении каких-либо сложных деталей для крупных компаний, всё это будет вашим преимуществом.</small></p>
            <textarea class="form-control" name="description" rows="6">{{ old('description') }}</textarea>
        </div>

        <hr>
        <div class="row mt-4 mb-3">
        <label class="form-label mb-3">В каких категориях вы оказываете услуги:</label>
      
        @foreach ($categoriesServices as $category) 
            <div class="col-12 col-md-4 mb-4">
                    <label class="form-check-label mt-2">
                           <b>{{$category->title}}</b>
                    </label>
                    <div class="form-check">
                    @foreach ($category->servicesAll as $service) 
                        <label class="form-check-label mt-2">
                            <input class="form-check-input" type="checkbox" id="services_checkbox" data-parent-id="{{ $category->id }}" value="{{ $service->id }}" name="categories[]">
                                {{$service->title}}
                        </label>
                        <br>
                    @endforeach
                </div>
            </div>
        @endforeach
        </div>

        <hr>
        <label class="form-label">Логотип компании: (не обязательно)</label>
            <div class="col-12 col-md-12 mt-2">
                <input type="file" class="logo-executor-company" name="logo" accept=".jpg,.png" hidden>
                <div class="file-column d-flex justify-content-center align-items-center flex-column order-image">
                    <i class="bi bi-file-image fs-1"></i>
                    <p class="m-0 mt-2 title">Логотип компании</p>
                    <span class="m-0"><small>Файл в формате: JPG или PNG</small></span>
                
                </div>
            </div>

		<button type="submit" class="btn btn-blue mt-3 mb-3">Добавить организацию</button>
    </form>


    <script>

    const order_image = document.querySelector('.order-image')
    const order_image_input = document.querySelector('.logo-executor-company')

    order_image.addEventListener('click', () => {
        order_image_input.click()
    })

</script>