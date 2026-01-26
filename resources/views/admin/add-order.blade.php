@extends('layouts.admin-panel')

@section('title', 'Панель администратора - добавление заказа')
@section('description', 'Панель администратора - добавление заказа')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Добавление заказа</h2>
</div>
        <x-site.message />
        <div class="row mt-2">
           <form method="post" enctype="multipart/form-data">
@csrf
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="mb-3">
  				<label class="form-label">Название заказа:</label>
  				<input type="text" class="form-control" name="title" placeholder="" value="{{ old('title') }}">
			</div>

            <div class="mb-3">
  				<label class="form-label">Количество:</label>
  				<input type="number" class="form-control" name="quantity" placeholder="" value="{{ old('quantity') }}">
			</div>
        </div>

        <div class="col-12 col-md-6">
            <div class="mb-3">
  				<label class="form-label">Проходная цена руб.: <small>Значение 0 означает договорную цену</small></label>
  				<input type="number" class="form-control" name="price" placeholder="" value="{{ old('price') }}">
			</div>

            <div class="mb-3">
  				<label class="form-label">Дата сбора предложений до:</label>
  				<input type="date" class="form-control" name="closing_date" placeholder="" min="<?= date('Y-m-d') ?>" value="{{ old('closing_date') }}">
			</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Описание заказа:</label>
            <textarea class="form-control" name="description" rows="6">{{ old('description') }}</textarea>
        </div>

        
            <label class="form-label">Чертежи и дополнительные файлы:</label>
            <div class="col-12 col-md-6 mt-2">
                <input type="file" class="order-image-input" name="order_image_file" accept=".jpg,.png" hidden>
                <div class="file-column d-flex justify-content-center align-items-center flex-column order-image">
                    <i class="bi bi-file-image fs-1"></i>
                    <p class="m-0 mt-2 title">Основной чертёж</p>
                    <span class="m-0"><small>Файл в формате: JPG или PNG</small></span>
                    <small>Будет виден на странице поиска и в карточке заказа.</small>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-2">
                <input type="file" class="order-file-input" name="order_archive_file" accept=".zip,.rar" hidden>
                <div class="file-column d-flex justify-content-center align-items-center flex-column order-file">
                    <i class="bi bi-file-zip fs-1"></i>
                    <p class="m-0 mt-2 title">Архив с доп. файлами</p>
                    <span class="m-0"><small>Файл в формате: RAR или ZIP</small></span>
                    <small>Архив будет доступен для скачивания в карточке заказа.</small>
                </div>
            </div>
        

        <div class="row mt-4 mb-3">
        <label class="form-label mb-3">В каких категориях размещаем заказ:</label>
      
        @foreach ($categories_services as $category) 
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
    </div>

    <button type="submit" class="btn btn-blue mt-3 mb-3">Разместить заказ</button>
</form>

<script>
    const services_checkbox = document.querySelectorAll('#services_checkbox')
    let parent_id
    let parent_ckeckbox

    services_checkbox.forEach((checkbox) => {
        checkbox.addEventListener('change', (e) => {
            parent_id = e.target.getAttribute('data-parent-id')
            parent_ckeckbox = document.querySelector(`[data-parent="${parent_id}"]`);
            parent_ckeckbox.checked = true
        })
    })

    // Input главного чертежа
    const order_image = document.querySelector('.order-image')
    const order_image_input = document.querySelector('.order-image-input')

    const order_file = document.querySelector('.order-file')
    const order_file_input = document.querySelector('.order-file-input')

    order_image.addEventListener('click', () => {
        order_image_input.click()
    })

    order_file.addEventListener('click', () => {
        order_file_input.click()
    })
</script>
        
    
        </div>
@endsection