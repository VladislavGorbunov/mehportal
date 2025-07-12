<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // Главная страница блога
    public function blog()
    {
        $data['title'] = 'МехПортал блог';
        $data['description'] = 'МехПортал блог';
        $data['header_title'] = 'МехПортал блог';
        $data['region_name'] = '';
        $data['region_slug'] = '';

        $data['articles'] = Article::get();
        return view('site.blog', $data);
    }

    // Страница статьи
    public function article()
    {

    }
}
