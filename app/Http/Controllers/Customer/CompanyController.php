<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\AddCustomerCompanyRequest;
use App\Http\Requests\Customer\UpdateCustomerCompanyRequest;
use App\Models\Customer;
use App\Models\CustomerCompany;
use App\Models\LegalForm;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $customer_id         = Auth::guard('customer')->user()->id;
        $data['company']     = Customer::find($customer_id)->customerCompanies;
        $data['legal_forms'] = LegalForm::get();
        $data['regions']     = Region::get();
        return view('customer.my-company', $data);
    }

    public function addCompanyPage()
    {
        $customer_id = Auth::guard('customer')->user()->id;
        $company_count = Customer::find($customer_id)->customerCompanies()->count();

        if ($company_count > 0) {
            session()->flash('message', 'Вы уже добавили компанию.');
            return redirect('/customer');
        }

        $data['regions']     = Region::get();
        $data['legal_forms'] = LegalForm::get();
        return view('customer.add-company', $data);
    }

    public function store(AddCustomerCompanyRequest $request)
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
            "customer_id"      => Auth::guard('customer')->user()->id,
            "active"           => true,
        ]);

        return redirect('/customer');
    }

    public function update(UpdateCustomerCompanyRequest $request)
    {
        $validated   = $request->validated();
        $customer_id = Auth::guard('customer')->user()->id;

        CustomerCompany::where('customer_id', $customer_id)->update([
            'legal_form'       => $validated['legal_form'],
            'title'            => $validated['title'],
            'inn'              => $validated['inn'],
            'region_id'        => $validated['region_id'],
            'address'          => $validated['address'],
            'contact_person'   => $validated['contact_person'],
            'phone'            => $validated['phone'],
            'extension_number' => $validated['extension_number'],
            'email'            => $validated['email'],
            'description'      => $validated['description'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }

}
