@extends('layouts.admin-panel')

@section('title', 'Панель администратора - добавление компании заказчика')
@section('description', 'Панель администратора - добавление компании заказчика')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="fs-4">Добавление компании заказчика</h2>
</div>
        <x-site.message />
        
        <x-admin.add-company :legalForms="$legal_forms" :regions="$regions" :customers="$customers" />
       
@endsection