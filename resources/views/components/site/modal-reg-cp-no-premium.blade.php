<div class="modal fade" tabindex="-1" id="modal-reg-cp-no-premium" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Отправить КП заказчику</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center m-0">Отправлять коммерческие предложения для этого заказа могут только исполнители с тарифом "Premium"</p>
        
      </div>
      <div class="modal-footer">
        <a href="{{ Route('executor-select-tariff') }}" class="d-block mx-auto text-center">Подключить Premium</a>
      </div>
    </div>
  </div>
</div>
