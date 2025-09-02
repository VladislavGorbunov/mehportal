<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // Главная страница блога
    public function blog()
    {
        $data['title'] = 'Статьи по металлообработке - МЕХПОРТАЛ';
        $data['description'] = 'Статьи по металлообработке - МЕХПОРТАЛ';
        $data['header_title'] = 'Статьи по металлообработке';
        $data['region_name'] = '';
        $data['region_slug'] = '';

        $data['articles'] = Article::get();
        return view('site.blog', $data);
    }

    // Страница статьи
    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();
        if (! $article) abort(404);
        $data['title'] = $article->title_meta;
        $data['description'] = $article->title_meta;
        $data['header_title'] = $article->title_article;
        $data['region_name'] = '';
        $data['region_slug'] = '';
        $data['article'] = $article;
        
        return view('site.article-page', $data);
    }
}
