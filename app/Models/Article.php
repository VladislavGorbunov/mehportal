<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    
    public static function getLastArticles()
    {
        return DB::table('articles')
            ->select('articles.*')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
    }
}
