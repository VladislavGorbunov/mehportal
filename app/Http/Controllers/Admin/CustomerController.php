<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginAdminRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function getActiveCustomers()
    {
        $customers = Customer::where('active', true)->paginate(15);
        dd($customers);
    }


    public function getNoActiveCustomers()
    {
        $customers = Customer::where('active', false)->paginate(15);
        dd($customers);
    }

    
    public function getPremiumCustomers()
    {
        $customers = Customer::where('premium', true)->paginate(15);
        dd($customers);
    }


    public function getCustomersCompanies()
    {
        $customers = Customer::where('active', true)->paginate(15);
        dd($customers);
    }
   

}
