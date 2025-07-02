@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')
    <style>
        .tariff-title {
            font-weight: 500;
        }

        .low-price {
            background: rgb(48, 183, 84);
            font-weight: 400;
            padding: 6px 22px;
            border-radius: 5px;
            color: #fff;
        }
    </style>
    <x-site.tariffs-executor />
    <hr>
    <x-site.tariffs-customer />
    
@endsection