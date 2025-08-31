@extends('layouts.order')

@section('title', $title)
@section('description', $description)

@section('content')

<div class="d-none d-md-block">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='9' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><small>Главная</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/blog"><small>Статьи</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>{{ $article->title_article }}</small></li>
        </ol>
    </nav>
</div>

<div class="mt-3" style="min-height: 300px;">
    <div class="row">
        {!! $article->text !!}
    </div>
</div>

@endsection