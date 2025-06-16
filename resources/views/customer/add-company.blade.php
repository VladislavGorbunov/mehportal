@extends('layouts.customer-panel')

@section('title', 'Панель заказчика - добавить компанию')
@section('description', 'Панель заказчика - добавить компанию')

@section('content')

<h2 class="fs-4">Добавление организации заказчика</h2>

<x-customer.company-data-form :legalForms="$legal_forms" :regions="$regions" />
@endsection