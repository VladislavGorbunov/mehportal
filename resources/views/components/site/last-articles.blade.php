<div class="mt-3 mb-3">
<h2 class="text-center">Статьи и новости портала</h2>
<p class="text-center small-text mb-2">Последние новости и статьи из мира металлообработки и промышленности</p>
<div class="row">
@foreach ($articles as $article)
    <div class="col-12 col-md-3 mt-2">
        <div class="col-12 p-3 index-articles-column">
            <img src="/images/article-poster.png" class="col-9 d-block mx-auto" alt="{{ $article->title_article }}" title="{{ $article->title_article }}">
            
            <div class="article-title mt-2">
            <a href="/article/{{ $article->slug }}"><h3 class="text-center fs-6 text-dark">{{ $article->title_article }}</h3></a>
            </div>
            <p class="short-decription text-center mb-0"><small>{{ $article->short_description }}</small></p>
            <hr>
            <p class="text-center text-secondary mt-1 mb-3"><small><i class="bi bi-calendar2-check me-1"></i> {{ date("d.m.Y", strtotime($article->created_at)) }}</small></p>
            <a href="/article/{{ $article->slug }}" class="d-block mx-auto text-center btn">Подробнее </a>
        </div>
    </div>
@endforeach
</div>
</div>