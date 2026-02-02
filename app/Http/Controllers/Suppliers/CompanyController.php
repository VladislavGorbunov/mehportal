<?php

namespace App\Http\Controllers\Suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier;
use App\Models\LegalForm;
use App\Models\Region;

class CompanyController extends Controller
{
    public function addCompanyPage()
    {
        // $supplier_id = Auth::guard('suppliers')->user()->id;
        // $data['company'] = Executor::find($executor_id)->executorCompanies;
        // $data['supplier'] = Supplier::where('id', $supplier_id)->first();4
        $data['legal_forms'] = LegalForm::get();
        $data['regions']             = Region::get();
        return view('suppliers.add-company', $data);
    }

}