<div class="modal fade" id="categories-services-modal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-categories">
        <div class="modal-content">
            <div class="modal-header"><span class="fs-5" id="exampleModalLabel1"><b>Заказы на металлообработку</b></span>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-12 col-sm-4 col-md-3 mb-4">
                        @if ($regionSlug !== '')
                            <a href="/{{ $regionSlug }}/orders/category/{{ $category->slug }}" class="category-link">{{$category->title}}</a>
                        @else
                            <a href="{{ $regionSlug }}/orders/category/{{ $category->slug }}" class="category-link">{{$category->title}}</a>
                        @endif
    
                        @foreach ($category->servicesLimit as $service)
                            @if ($regionSlug !== '')
                                <a href="/{{ $regionSlug }}/orders/service/{{ $service->slug }}" class="service-link">{{ $service->title }}</a>
                            @else
                                <a href="{{ $regionSlug }}/orders/service/{{ $service->slug }}" class="service-link">{{ $service->title }}</a>
                            @endif
                        @endforeach
                        <div class="mt-2">
                            <a href="">Показать все</a>
                        </div>
                    </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>