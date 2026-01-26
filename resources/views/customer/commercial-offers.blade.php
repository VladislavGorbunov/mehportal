@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - МЕХПОРТАЛ')
@section('description', 'Панель заказчика - МЕХПОРТАЛ')

@section('content')
    <h2 class="fs-4">Коммерческие предложения</h2>
        <x-site.message />
        <div class="mt-4">
        @if (! $com_offers) 
            <p>Коммерческих предложений нет.</p>
        @endif
        
        <div class="mt-4">
            @foreach($com_offers as $offer)
            <div class="rounded mt-4" style="box-shadow: 0 2px 20px -15px #4f585d; border: 1px solid rgb(238, 244, 246);">
                <div class="py-3 px-4">
                    <p class="fs-5 fw-bold mb-2">Заказ: {{ $offer->order->title }}</p>
                    <p class="mt-1 mb-1">Предложение от компании: {{ $offer->company_name }}</p>
                    <p class="mt-1 mb-1">Регион: {{ $offer->company_region }}</p>
                    <p class="mt-1 mb-1">Дата предложения: {{ date('d.m.Y', strtotime($offer->created_at)) }}</p>
                    <a href="/customer/commercial-offer/{{ $offer->id }}" class="btn btn-dark mt-3 mb-2"><small>Смотреть</small></a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-3 mb-3">
            @if ($com_offers) 
                {{ $com_offers->links() }}
            @endif
        </div>
        </div>
    
@endsection