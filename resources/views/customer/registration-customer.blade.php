@extends('layouts.registration')

@section('title', 'МЕХПОРТАЛ - регистрация заказчика')
@section('description', 'Регистрация заказчика на портале - МЕХПОРТАЛ')

@section('content')

<x-customer.registration-customer :regions="$regions" :legalForms="$legal_forms"/>

@endsection