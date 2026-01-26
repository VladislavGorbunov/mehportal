<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\UpdateCustomerProfileRequest;
use App\Models\Customer;
use App\Models\CustomerTariffConnectionRequest;
use App\Models\CustomerTariffs;
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
    
    
    public function delete(Request $request, $id) 
    {
        if (Auth::guard('customer')->user()->id == $id) {
            Customer::where('id', $id)->delete();

            Auth::guard('customer')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        } else {
            return redirect('/customer/profile');
        }
    }


    public function selectTariff(Request $request)
    {
        $customer_id      = Auth::guard('customer')->user()->id;
        $data['customer'] = Customer::where('id', $customer_id)->first();
        $tariff = CustomerTariffs::where('months', $request->tariff_months)->first();

        if ($request->method() == 'POST') {
            CustomerTariffConnectionRequest::create([
                'customer_id' => $customer_id,
                'tariff_months' => $request->tariff_months,
                'price' => $tariff->price,
                'title' => $request->title,
                'inn' => $request->inn,
                'email' => $request->email
            ]);

            session()->flash('message', 'Заявка на Premium тариф отправлена.');
            return redirect()->back();

        } else {
            $data['tariffs']  = CustomerTariffs::get();
            return view('customer.tariff', $data);
        }
    }

}
