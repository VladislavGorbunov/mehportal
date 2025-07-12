@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="mt-3">
    <div class="row">
        
    @foreach($articles as $article) 
        <div class="col-12 col-md-3">
            {{ $article->title }}
        </div>
    @endforeach
    </div>
</div>

@endsection