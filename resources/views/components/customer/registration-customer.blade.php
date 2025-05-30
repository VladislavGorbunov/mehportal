<div class="d-flex align-items-center">
    <div class="col-12 col-md-10 mx-auto registration-form-block">
        <form method="post">
            @csrf
            <div class="d-flex justify-content-center align-items-center mb-1 flex-column">
                <x-site.logo />
                <p class="m-0 p-0"><small>Регистрация заказчика</small></p>
            </div>

            <x-site.errors />

            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        {{ old('legal_form') }}
                        <label class="form-label">Организационно-правовая форма:</label>
                            <select class="form-select" name="legal_form" required>
                                @foreach ($legalForms as $legalForm)
                                    @if (old('legal_form') == $legalForm->name)
                                        <option value="{{ $legalForm->name }}" selected>{{ $legalForm->name }} - {{ $legalForm->full_name }}</option>
                                    @else
                                        <option value="{{ $legalForm->name }}">{{ $legalForm->name }} - {{ $legalForm->full_name }}</option>
                                    @endif
                                @endforeach
                
                            </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Название организации или ИП:</label>
                        <input type="text" class="form-control" value="{{ old('company') }}" placeholder="Напрмер: ЛенТехПром или Иванов В.В." name="company" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ИНН организации или ИП:</label>
                        <input type="text" class="form-control" value="{{ old('inn') }}" placeholder="Например: 197398725932" name="inn" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Контактное лицо:</label>
                        <input type="text" class="form-control" value="{{ old('contact_person') }}" placeholder="Например: Алёхин Сергей Владимирович" name="contact_person" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Телефон контактного лица:</label>
                        <input type="tel" autocomplete="tel" type="text" class="form-control" value="{{ old('phone') }}" placeholder="" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Добавочный номер при наличии:</label>
                        <input type="text" class="form-control" value="{{ old('extension_number') }}" placeholder="Например: 312" name="extension_number" required>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                
                    <div class="mb-3">
                        <label class="form-label">Регион:</label>
                            <select class="form-select" name="region_id" required>
                                @foreach ($regions as $region)
                                @if (old('region_id') == $region->id)
                                    <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                                @else
                                    <option value="{{ $region->id }}" >{{ $region->name }}</option>
                                @endif
                                @endforeach
                            </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Адрес:</label>
                        <input type="text" class="form-control" value="{{ old('adress') }}" placeholder="Например: ул. Судостроительная д.31 к.2" name="adress" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ваше имя:</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Например: Владимир" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Фамилия:</label>
                        <input type="text" class="form-control" value="{{ old('lastname') }}" placeholder="Например: Иванов" name="lastname" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Например: evgeni-tsk@mail.ru" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Пароль для входа: <small>(не менее 8 символов)</small></label>
                        <input type="password" class="form-control" placeholder="" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Повторите пароль:</label>
                        <input type="password" class="form-control" placeholder="" name="password" required>
                    </div>

                </div>
                <div class="col-12 mt-3">
                    <div class="form-check d-block">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="checked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            <small>Нажимая кнопку «Стать заказчиком», вы подтверждаете согласие с условиями <a href="">Договора-оферты</a> и <a href="">Политикой обработки персональных данных</a>.</small>
                        </label>
                    </div>
                </div>
                <div class="mt-4 text-center ">
                    <button type="submit" class="btn btn-registration">Стать заказчиком</button>
                </div>
            </div>
        </form>

        <div class="square"></div>
        <div class="square-2"></div>
    </div>
</div>


<script>
    const checkbox = document.querySelector('#flexCheckChecked')
    const button = document.querySelector('.btn-registration')
    buttonSwitch()
    
    function buttonSwitch() {
        if (checkbox.checked) {
            console.log('true')
            button.disabled = false
        } else {
            console.log('false')
            button.disabled = true
        }
    }

    checkbox.addEventListener('click', buttonSwitch)
    
</script>