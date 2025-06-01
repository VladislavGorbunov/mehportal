<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Главная страница сайта
    public function index() 
    {
        $data['title'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['description'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
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
