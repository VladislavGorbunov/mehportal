<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateCustomerProfileRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $customer_id      = Auth::guard('customer')->user()->id;
        $data['customer'] = Customer::where('id', $customer_id)->first();
        return view('customer.profile', $data);
    }

    public function update(UpdateCustomerProfileRequest $request)
    {
        $validated   = $request->validated();
        $customer_id = Auth::guard('customer')->user()->id;

        Customer::where('id', $customer_id)->update([
            'name'     => $validated['name'],
            'lastname' => $validated['lastname'],
            'phone'    => $validated['phone'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }

}
