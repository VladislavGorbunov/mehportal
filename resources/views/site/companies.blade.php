@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')


<h2 class="text-center">Каталог предприятий</h2>

<div class="d-none d-md-block">
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    @if ($breadcrumb['region'])
    <li class="breadcrumb-item"><a href="/{{ $breadcrumb['region_slug'] }}">Каталог компаний {{ $breadcrumb['region'] }}</a></li>
    @else
    <li class="breadcrumb-item">Каталог компаний</li>
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['category'] }}</li>
  </ol>
</nav>
</div>

@if (! empty($companies))
    @foreach ($companies as $company)
        <x-site.companies.company-block :company="$company" />
    @endforeach

    <div class="alert alert-primary d-flex flex-column flex-md-row text-center align-items-center justify-content-center gap-4 mt-4 mb-0 py-4">
    <div><p class="m-0 fs-5">Оказываете услуги по металлообработке?</p>
    <small>Разместите свою компанию в нашем каталоге!</small></div>
    <a href="{{ Route('executor-add-company') }}" class="btn btn-add-order-site" target="_blank">Добавить компанию</a>
</div>
@else
    <x-site.no-companies />
@endif

<div class="mt-4">
{{ $pagination->links() }}
</div> 

@endsection