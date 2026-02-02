@extends('layouts.executor-panel')

@section('title', 'Панель исполнителя - добавить компанию')
@section('description', 'Панель исполнителя - добавить компанию')

@section('content')

<h2 class="fs-4">Добавление компании</h2>

<x-suppliers.company-data-form :legalForms="$legal_forms" :regions="$regions"/>


@endsection