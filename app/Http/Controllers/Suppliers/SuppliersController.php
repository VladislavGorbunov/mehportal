<?php

namespace App\Http\Controllers\Suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    public function index()
    {
        $supplier_id = Auth::guard('suppliers')->user()->id;
        // $data['company'] = Executor::find($executor_id)->executorCompanies;
        $data['supplier'] = Supplier::where('id', $supplier_id)->first();
        return view('suppliers.index', $data);
    }

}