<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\CategoryService;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = CategoryService::get();
        return view('admin.categories', $data);
    }


    public function edit(int $id)
    {
        $data['category'] = CategoryService::where('id', $id)->first();
        return view('admin.category-edit', $data);
    }

}
