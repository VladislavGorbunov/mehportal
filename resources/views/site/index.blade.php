@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
    <x-site.companies />
    <x-site.for-created />
   
    <div class="mt-4">
        <div class="d-md-flex align-items-center">
        
            <div class="flex-grow-1">
                <h2 class="text-center text-md-start mt-0 mb-0">Открытые заказы на сегодня</h2> 
            </div>

            <div class="d-flex flex-row justify-content-end">
                <div class="row gx-3">
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
        @endforeach
        <x-site.add-order-banner />
    @else
        <x-site.no-order />
    @endif
    <div class="p-2">
        <h3 class="text-center mt-3">Открытые заказы на металлообработку от заказчиков</h3>
    <p class="mt-2 text-center">
        Поиск выгодных предложений в сфере металлообработки – задача не самая простая. Однако, уровень загрузки 
        вашего производства напрямую зависит только от ваших усилий. Ключевым шагом является выбор подходящей платформы 
        для поиска тендеров и заявок на механическую обработку металла. Многие компании, нуждающиеся в подобных 
        ресурсах, отдают предпочтение сайту mehportal.ru. Это обусловлено несколькими факторами: интуитивно понятный
         интерфейс, широкий спектр доступных заказов, а также возможность, при активации тарифного плана, получать
          оперативный доступ к самым актуальным предложениям на рынке металлообработки. Свежие заявки поступают 
          напрямую от заказчиков.
    </p></div>
@endsection