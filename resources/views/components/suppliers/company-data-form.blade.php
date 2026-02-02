<x-site.errors />
<x-site.message />

    <form method="post" enctype="multipart/form-data">
    @csrf
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label"><b>Организационно-правовая форма:</b></label>
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
  					<label class="form-label"><b>Название организации:</b> <small class="text-danger">(Без ООО, ИП, кавычек и.т.д)</small></label>
  					<input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Например: ТехноСистемы или Иванов В.А. ">
				</div>

				<div class="mb-3">
  					<label class="form-label"><b>ИНН организации:</b></label>
  					<input type="text" class="form-control" name="inn" value="{{ old('inn') }}" placeholder="Например: 178081376893">
				</div>

				<div class="mb-3">
                    <label class="form-label"><b>Регион:</b></label>
                        <select class="form-select" name="region_id">
                            <option value="">Выберите регион</option>
                            @foreach ($regions as $region)
                                @if (old('region_id') == $region->id)
                                    <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                                @else
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>

				<div class="mb-3">
  					<label class="form-label"><b>Адрес компании:</b></label>
  					<input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Например: Санкт-Петербург, Боровая улица, д. 51 ">
				</div>
            </div>

            <div class="col-12 col-md-6">
				<div class="mb-3">
  					<label class="form-label"><b>Контактное лицо (Ф.И.О):</b></label>
  					<input type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}" placeholder="Например: Иванов Евгений Владимирович">
				</div>

				<div class="mb-3">
  					<label class="form-label"><b>Телефон контактного лица:</b></label>
  					<input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Например: +7 (123) 456-78-90">
				</div>

				<div class="mb-3">
  					<label class="form-label"><b>Добавочный номер при наличии:</b></label>
  					<input type="number" class="form-control" name="extension_number" value="{{ old('extension_number') }}" placeholder="Например: 363">
				</div>

				<div class="mb-3">
  					<label class="form-label"><b>Email контактного лица:</b></label>
  					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Например: petrov-dmk@mail.ru">
				</div>

                <div class="mb-3">
  					<label class="form-label"><b>Сайт компании при наличии:</b></label>
  					<input type="text" class="form-control" name="site" value="{{ old('site') }}" placeholder="Например: https://my-company.ru">
				</div>
            </div>
        </div>
        
        
        
        <div class="mb-3">
            <label class="form-label mb-0"><b>Описание компании:</b> (минимум 50 символов)</label>
            <textarea class="form-control" id="summernote" name="description" rows="6">{{ old('description') }}</textarea>
        </div>
        
        
        
         
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- include summernote css/js-->
        <link href="/js/summernote/summernote-bs5.css" rel="stylesheet">
        <script src="/js/summernote/summernote-bs5.js"></script>
    
        <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                toolbar: [
                    ['para', ['ul', 'ol']],
                ]
            });
            
            
            $('#summernote2').summernote({
                height: 200,
                toolbar: [
                    ['para', ['ul', 'ol']],
                ]
            });
        });
    </script> 
        <hr>
        

        
        <div class="row mt-4 mb-3">
        <label class="form-label mb-3"><b>В каких категориях вы оказываете услуги:</b></label>
      
        
        </div>

        <hr>
        <label class="form-label"><b>Логотип компании:</b> (не обязательно)</label>
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