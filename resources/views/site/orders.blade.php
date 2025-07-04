@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')

    <div class="mt-5">
        <div class="d-md-flex align-items-center">
        
            <div class="flex-grow-1">
                <h2 class="text-center text-md-start mt-0 mb-0">Открытые заказы на сегодня</h2> 
            </div>

            <div class="d-flex flex-row justify-content-end">
                <div class="row gx-3">
                    <div class="col-12 col-md-auto text-center mb-2 mb-md-0">
                        <div class="col-12 link-all-orders-block">
                            <a href="">Смотреть все заказы</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto text-center mb-2 mb-md-0">
                        <div class="col-12 count-orders-block">
                            <b>Активных заказов: {{ $count_orders }}</b>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto text-center mb-2 mb-md-0">
                        <div class="col-12 count-archive-orders-block">
                            <b>Заказов в архиве: {{ $archive_count_orders }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    @if (!empty($orders))
        @foreach ($orders as $order)
            <x-site.order-block :order="$order" :regionSlug="$region_slug"/>
            <x-site.add-order-banner />
        @endforeach   
    @else
        <x-site.no-order />
    @endif


    {{ $paginate->links() }}
@endsection