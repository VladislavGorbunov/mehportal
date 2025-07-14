<!-- Modal city-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-regions">
    <div class="modal-content">
      <div class="modal-header"><b id="exampleModalLabel">Выберите регион</b>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row"> 
            @foreach ($cities as $city) 
            <div class="col-6 col-md-4 mb-2">
                <a href="/{{$city->slug}}" class="region-link">{{$city->name}}</a>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </div>
</div>