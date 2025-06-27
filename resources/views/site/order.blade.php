@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

    <x-site.order :order="$order" :regionSlug="$region_slug"/>

@endsection