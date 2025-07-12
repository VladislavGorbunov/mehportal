<!-- Modal city-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><b>Выберите регион</b>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row"> 
            @foreach ($cities as $city) 
            <div class="col-6 text-center mb-3">
                <a href="/{{$city->slug}}">{{$city->name}}</a>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </div>
</div>