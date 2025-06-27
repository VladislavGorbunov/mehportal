<div class="d-flex align-items-center " style="height:100vh">
    <div class="col-12 col-md-4 mx-auto login-form-block">
        <form method="post">
            @csrf
            <div class="d-flex justify-content-center align-items-center mb-1 flex-column">
                <x-site.logo />
                <p class="m-0 p-0"><small>Вход для администратора</small></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="name@example.ru" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Пароль:</label>
                <input type="password" class="form-control" placeholder="**********" name="password" required>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="remember" role="switch" checked>
                <label class="form-check-label"><small>Запомнить меня на этом компьютере</small></label>
            </div>

            <div class="mt-4 mb-3 text-center ">
                <button type="submit" class="btn btn-login"><i class="bi bi-unlock2"></i> Войти</button>
            </div>
        </form>

        <x-site.errors />

        <div class="square"></div>
        <div class="square-2"></div>
    </div>
</div>
