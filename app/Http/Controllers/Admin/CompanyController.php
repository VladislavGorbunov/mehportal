<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalForm;
use App\Models\Region;
use App\Models\Customer;
use App\Models\CustomerCompany;
use App\Http\Requests\Customer\AddCustomerCompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function addCompanyPage()
    {
        $data['legal_forms'] = LegalForm::get();
        $data['regions']     = Region::get();
        $data['customers'] = Customer::get();
        return view('admin.add-company', $data);
    }


    public function addCompany(AddCustomerCompanyRequest $request)
    {
        $validated = $request->validated();
        
        $customerCompany = CustomerCompany::create([
            "legal_form"       => $validated['legal_form'],
            "title"            => $validated['title'],
            "inn"              => $validated['inn'],
            "region_id"        => $validated['region_id'],
            "address"          => $validated['address'],
            "contact_person"   => $validated['contact_person'],
            "phone"            => $validated['phone'],
            "extension_number" => $validated['extension_number'],
            "email"            => $validated['email'],
            "description"      => $validated['description'],
            "customer_id"      => $validated['customer_id'],
            "active"           => true,
        ]);
        
        session()->flash('message', 'Компания добавлена');
        return redirect('admin');
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