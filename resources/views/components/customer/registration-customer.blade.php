<div class="d-flex align-items-center" style="height: 100vh">
    <div class="col-12 col-md-8 mx-auto registration-form-block">
        <form method="post">
            @csrf
            <div class="d-flex justify-content-center align-items-center mb-1 flex-column">
                <x-site.logo />
                <p class="m-0 p-0"><small>Регистрация в роли заказчика</small></p>
            </div>

            <x-site.errors />

            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Ваше имя:</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Например: Владимир" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Фамилия:</label>
                        <input type="text" class="form-control" value="{{ old('lastname') }}" placeholder="Например: Иванов" name="lastname" required>
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Телефон:</label>
                        <input type="tel" autocomplete="tel" type="text" class="form-control" value="{{ old('phone') }}" placeholder="+7 (123) 456-78-90" name="phone" required>
                    </div>

                </div>

                <div class="col-12 col-md-6">
                
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Например: evgeni-tsk@mail.ru" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Пароль для входа: <small>(не менее 8 символов)</small></label>
                        <input type="password" class="form-control password" placeholder="" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Повторите пароль:</label>
                        <input type="password" class="form-control password-replay" placeholder="" name="password" required>
                    </div>

                </div>
                <div class="col-12 mt-3">
                    <div class="form-check d-block">
                    <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="checked" checked>
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
    const password = document.querySelector('.password')
    const passwordReplay = document.querySelector('.password-replay')
    button.disabled = true
    let checkboxFlag
    let passwordOk

    function checkboxFunc() {
        if (checkbox.checked) {
            checkboxFlag = true
        } else {
            checkboxFlag = false
        }

        check()
    }

    function check() {
        if (password.value == passwordReplay.value && checkboxFlag == true) {
            button.disabled = false
        } else {
            button.disabled = true
        }
    }

    checkbox.addEventListener('click', checkboxFunc)
    password.addEventListener('input', checkboxFunc)
    passwordReplay.addEventListener('input', checkboxFunc)

</script>