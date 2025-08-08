<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    // Главная страница кабинета поставщика
    public function index()
    {
        echo '<h1 style="text-align:center;margin-top: 100px;">Пишем код. Скоро всё заработает =)</h1>
        <a href="/" style="display:block;margin: 20px auto; text-align:center; color: black;font-size: 18px">Вернуться на главную страницу</a>';
    } 
    

}