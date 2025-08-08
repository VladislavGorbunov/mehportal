@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Правовые документы портала</small></li>
        </ol>
    </nav>
</div>


<div class="mt-4" style="min-height: 460px">

<h2 class="text-center mb-5">Правовые документы портала</h2>

<p class="border rounded p-3 mt-3"><a href="{{ Route('dogovor') }}">1. Договор-оферта на оказание информационных услуг</a></p>
<p class="border rounded p-3 mt-3"><a href="{{ Route('privacy-policy') }}" >2. Политика обработки персональных данных</a></p>


</div>

@endsection