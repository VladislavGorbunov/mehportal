@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - добавить компанию')
@section('description', 'Панель исполнителя - добавить компанию')

@section('content')

<h2 class="fs-4">Добавление предприятия</h2>

<x-executor.company-data-form :legalForms="$legal_forms" :regions="$regions" :categoriesServices="$categories_services"/>


@endsection