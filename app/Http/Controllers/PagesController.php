<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class PagesController extends Controller
{

    // Главная страница сайта
    public function index() 
    {
        $data['title'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['description'] = 'Заказы на металлообработку в открытом доступе по всей России - МЕХПОРТАЛ';
        $data['header_title'] = 'Заказы на металлообработку в открытом доступе по всей России';
        $data['region_name'] = '';
        $data['region_slug'] = '';
        return view('site.index', $data);
    }

    public function cityIndexPage($region_slug) 
    {
        $region = Region::where('slug', $region_slug)->first();

        if (! $region) abort(404);

        $data['title'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['description'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['header_title'] = 'Заказы на металлообработку в открытом доступе ' . $region->name_in;
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;
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
