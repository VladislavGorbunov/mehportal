@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')


<h2 class="text-center">Каталог предприятий</h2>
@if (! empty($companies))
    @foreach ($companies as $company)
        <x-site.companies.company-block :company="$company" />
    @endforeach
@else
    <x-site.no-companies />
@endif
@endsection