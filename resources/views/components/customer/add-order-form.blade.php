<x-site.errors />
<form method="post">
@csrf
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="mb-3">
  				<label class="form-label">Название заказа:</label>
  				<input type="text" class="form-control" name="title" placeholder="">
			</div>

            <div class="mb-3">
  				<label class="form-label">Количество:</label>
  				<input type="number" class="form-control" name="quantity" placeholder="">
			</div>
        </div>

        <div class="col-12 col-md-6">
            <div class="mb-3">
  				<label class="form-label">Проходная цена (руб.):</label>
  				<input type="number" class="form-control" name="price" placeholder="">
			</div>

            <div class="mb-3">
  				<label class="form-label">Дата сбора предложений до:</label>
  				<input type="date" class="form-control" name="closing_date" placeholder="">
			</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Описание заказа:</label>
            <textarea class="form-control" name="description" rows="6"></textarea>
        </div>

        
            <label class="form-label">Чертежи и дополнительные файлы:</label>
            <div class="col-12 col-md-6 mt-2">
                <input type="file" hidden>
                <div class="file-column d-flex justify-content-center align-items-center flex-column">
                    <i class="bi bi-file-image fs-1"></i>
                    <p class="m-0 mt-2 title">Основной чертёж</p>
                    <span class="m-0"><small>Файл в формате: JPG или PNG</small></span>
                    <small>Будет виден на странице поиска и в карточке заказа.</small>
                </div>
                
            </div>
            <div class="col-12 col-md-6 mt-2">
                <input type="file" hidden>
                <div class="file-column d-flex justify-content-center align-items-center flex-column">
                    <i class="bi bi-file-zip fs-1"></i>
                    <p class="m-0 mt-2 title">Архив с доп. файлами</p>
                    <span class="m-0"><small>Файл в формате: RAR или ZIP</small></span>
                    <small>Архив будет доступен для скачивания в карточке заказа.</small>
                </div>
            </div>
        

        <div class="row mt-4 mb-3">
        <label class="form-label mb-3">В каких категориях размещаем заказ:</label>
      
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
</script>