@extends('layouts.admin-panel')

@section('title', 'Панель администратора - редактирование компании исполнителя')
@section('description', 'Панель администратора - редактирование компании исполнителя')

@section('content')
<div class="mb-4">
    <h2 class="fs-4 mb-3">Редактирование компании исполнителя</h2>
        <x-site.message />
        <x-site.errors />
        <form action="/admin/executor/company/update" method="POST">
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
                
                <div class="mb-3">
                    <label class="form-label">Активная компания:</label>
  					<select class="form-select" name="active">
                        @if ($company->active)
                            <option value="1" selected>Да</option>
                            <option value="0" >Нет</option>
                        @else
                            <option value="0" selected>Нет</option>
                            <option value="1" >Да</option>
                        @endif
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
                
                <div class="mb-3">
                    <label class="form-label">Сайт:</label>
  				    <input type="text" class="form-control" name="site" value="{{ $company->site }}" >
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Адрес:</label>
  				<input type="text" class="form-control" name="address" value="{{ $company->address }}" >
            </div>
            


            <div class="mb-3">
                <label class="form-label">Описание:</label>
                <textarea class="form-control" rows="3" id="summernote" name="description">{{ $company->description }}</textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label mb-1"><b>Перечислите станки и оборудование которое у Вас есть на производстве:</b></label>
                <textarea class="form-control" id="summernote2" name="machines" rows="6">{{ $company->machines }}</textarea>
            </div>
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
                    ['font', ['bold', 'underline', 'clear']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
            
            
            $('#summernote2').summernote({
                height: 200,
                toolbar: [
                    ['para', ['ul', 'ol']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script> 
        
        
        <hr>
        <button type="submit" class="btn btn-blue py-2 mt-2">Сохранить изменения</button>
        <hr>
        <a href="{{ Route('admin-executor-company-delete', ['id' => $company->id]) }}" class="text-danger mt-2">Удалить компанию</a>
        </form>   
</div>      
@endsection