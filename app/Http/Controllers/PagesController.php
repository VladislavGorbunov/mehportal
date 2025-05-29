<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Главная страница сайта
    public function index() 
    {
        $data['title'] = 'МЕХПОРТАЛ - заказы на металлообработку по всей России';
        $data['description'] = 'МЕХПОРТАЛ - заказы на металлообработку по всей России';
        return view('site.index', $data);
    }


    // Страница о компании
    public function about() 
    {
        echo 'about';
    }


    // Страница контактов
    public function contacts() 
    {
        echo 'contacts';
    }
}
