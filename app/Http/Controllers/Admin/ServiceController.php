<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Http\Requests\Admin\StoreServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Service;
use App\Models\CategoryService;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::get();
        return view('admin.services', $data);
    }


    public function edit(int $id)
    {
        $data['service'] = Service::where('id', $id)->first();
        $data['categories'] = CategoryService::get();
        return view('admin.service-edit', $data);
    }
    
    public function update(UpdateServiceRequest $request) 
    {
        $validated = $request->validated();
        
        Service::where('id', $request->id)->update([
            'title'     => $validated['title'],
            'title_case' => $validated['title_case'],
            'category_id' => $validated['category_id'],
            'slug'    => $validated['slug'],
            'description'    => $validated['description'],
            'active'   => $validated['active'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }
    
    
    public function add()
    {
        $data['categories'] = CategoryService::get();
        return view('admin.service-add', $data);
    }
    
    
    public function store(StoreServiceRequest $request) 
    {
        $validated = $request->validated();
        
        Service::create([
            'title'       => $validated['title'],
            'title_case'  => $validated['title_case'],
            'category_id' => $validated['category_id'],
            'slug'        => $validated['slug'],
            'description' => $validated['description'],
            'active'      => $validated['active'],
        ]);

        session()->flash('message', 'Услуга добавлена');

        return redirect()->back();
    }
    
    
    public function delete(int $id) 
    {
        Service::where('id', $id)->delete();
        session()->flash('message', 'Услуга удалена');
        return redirect('admin');
    }

}