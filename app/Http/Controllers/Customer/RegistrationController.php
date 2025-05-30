<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\RegistrationCustomerRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\LegalForm;

class RegistrationController extends Controller
{
    //
    public function registrationCustomerPage()
    {
        $data['regions'] = Region::get();
        $data['legal_forms'] = LegalForm::get();
        return view('customer.registration-customer', $data);
    }

    public function store(RegistrationCustomerRequest $request)
    {
        $validated = $request->validated();

        dd($validated);
    }
}
