<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class IndexController extends Controller
{
    //
    public function index()
    {
        $customer_id = Auth::guard('customer')->user()->id;
        $data['company'] = Customer::find($customer_id)->customerCompanies;
        $data['customer'] = Customer::where('id', $customer_id)->first();
        return view('customer.index', $data);
    }

}
