<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Http\Requests\Admin\StoreCategoryRequest;
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
    
    public function update(UpdateCategoryRequest $request) 
    {
        $validated = $request->validated();
        
        CategoryService::where('id', $request->id)->update([
            'title'     => $validated['title'],
            'title_case' => $validated['title_case'],
            'slug'    => $validated['slug'],
            'description'    => $validated['description'],
            'active'   => $validated['active'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }
    
    
    public function add()
    {
        return view('admin.category-add');
    }
    
    
    public function store(StoreCategoryRequest $request) 
    {
        $validated = $request->validated();
        
        CategoryService::create([
            'title'     => $validated['title'],
            'title_case' => $validated['title_case'],
            'slug'    => $validated['slug'],
            'description'    => $validated['description'],
            'active'   => $validated['active'],
        ]);

        session()->flash('message', 'Категория добавлена');

        return redirect()->back();
    }
    
    
    public function delete(int $id) 
    {
        CategoryService::where('id', $id)->delete();
        session()->flash('message', 'Категория удалена');
        return redirect('admin');
    }

}
