<p class="mt-3 mb-0 fs-5"><b>Категории:</b></p>
            <div class="mb-3 mt-2 d-flex flex-wrap">
                @foreach ($order['services'] as $service)
                    @if ($regionSlug !== '')
                        <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="/{{ $regionSlug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
                    @else
                        <div class="services-list me-2 mb-2 d-flex align-items-center"><i class="bi bi-folder-check"></i> <a href="{{ $regionSlug }}/orders/service/{{ $service->slug }}">{{ $service->title }}</a></div>
                    @endif
                @endforeach
            </div>
        <hr>