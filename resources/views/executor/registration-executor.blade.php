@extends('layouts.registration')

@section('title', 'МЕХПОРТАЛ - регистрация исполнителя')
@section('description', 'Регистрация исполнителя на портале - МЕХПОРТАЛ')

@section('content')

<x-executor.registration-executor :regions="$regions"/>

@endsection