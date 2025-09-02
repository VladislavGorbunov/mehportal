<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CommercialOffer;

class CommercialOffersController extends Controller
{
    public function index()
    {   
        $customer_id = Auth::guard('customer')->user()->id;
        $data['com_offers'] = CommercialOffer::where('customer_id', $customer_id)->paginate(6);
        return view('customer.commercial-offers', $data);
    }

}
