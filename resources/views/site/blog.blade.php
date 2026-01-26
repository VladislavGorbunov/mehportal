@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Статьи</small></li>
        </ol>
    </nav>
</div>

<div class="mt-3" style="min-height: 300px;">
    <div class="row">
    @if(empty($articles))
        <p class="text-center">Статей пока что нет...</p>
    @endif
    
    @foreach($articles as $article) 
        <div class="col-12 col-md-3 mb-4">
            <div class="col-12 px-3 py-4 border rounded">
                <img src="/images/article-poster.png" class="img-fluid rounded">
                <h3 class="mt-3 mb-2 text-center fs-6">{{ $article->title_article }}</h3>
                <p class="mt-3 mb-2 text-center">{{ $article->description }}</p>
                <p class="text-center text-secondary mt-1 mb-3"><small>{{ date("d.m.Y", strtotime($article->created_at)) }}</small></p>
                <a href="/article/{{ $article->slug }}" class="d-block mx-auto text-center">Читать статью</a>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection