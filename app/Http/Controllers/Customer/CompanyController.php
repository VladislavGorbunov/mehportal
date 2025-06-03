<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\LegalForm;
use App\Models\Region;

class CompanyController extends Controller
{
    //
    public function index()
    {   
        $customer_id = Auth::guard('customer')->user()->id;
        $data['companies'] = Customer::find($customer_id)->customerCompanies;

        return view('customer.my-company', $data);
    }


    public function addCompanyPage()
    {
        $data['regions'] = Region::get();
        $data['legal_forms'] = LegalForm::get();
        return view('customer.add-company', $data);
    }

}
