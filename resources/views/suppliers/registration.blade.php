@extends('layouts.registration')

@section('title', 'МЕХПОРТАЛ - регистрация поставщика')
@section('description', 'Регистрация поставщика на портале - МЕХПОРТАЛ')

@section('content')

<x-suppliers.registration :regions="$regions"/>

@endsection