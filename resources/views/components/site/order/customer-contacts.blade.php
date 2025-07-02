<div class="row">
<div class="col-12 col-md-6">
    <p class="mb-3">Заказчик: <b>{{ $order['company_legal_form'] }} {{ $order['company_title'] }}</b></p>
    <p class="mb-3">ИНН заказчика: <b>{{ $order['company_inn'] }}</b></p>
    <p class="mb-3">Регион заказчика: <b>{{ $order['region_name'] }}</b></p>
    <p class="mb-3">Адрес заказчика: <b>{{ $order['company_address'] }}</b></p>
</div>

<div class="col-12 col-md-6">
    <p class="mb-3">Контактное лицо: <b>{{ $order['person'] }}</b></p>
    <p class="mb-3">Телефон: <b>{{ $order['company_phone'] }}</b></p>
    <p class="mb-3">Добавочный: <b>{{ $order['extension_number'] }}</b></p>
    <p class="mb-3">Email: <b class="email">{{ $order['company_email'] }}</b> <button class="copy-btn"><i class="bi bi-copy me-1"></i> Копировать</button></p>
</div>
</div>

<script>
    const copyBtn = document.querySelector('.copy-btn')
    const emailText = document.querySelector('.email')

    copyBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(emailText.textContent)
            .then((email) => {
                alert('Скопировано')
            })
            .catch(error => {
                console.error(`Текст не скопирован ${error}`)
        })
    })

</script>