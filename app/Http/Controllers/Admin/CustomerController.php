<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCustomerProfileRequest;
use App\Models\Customer;
use App\Models\CustomerTariffs;
use App\Models\PremiumCustomersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function getActiveCustomers()
    {
        $data['customers'] = Customer::where('active', true)->paginate(10);
        $data['title']     = 'Активные заказчики';
        return view('admin.customers', $data);
    }

    public function getNoActiveCustomers()
    {
        $data['customers'] = Customer::where('active', false)->paginate(15);
        $data['title']     = 'Не активные заказчики';
        return view('admin.customers', $data);
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

    public function customerEdit($id)
    {
        $data['customer'] = Customer::where('id', $id)->first();
        return view('admin.customer-edit', $data);
    }

    public function update(UpdateCustomerProfileRequest $request)
    {
        $validated = $request->validated();

        Customer::where('id', $request->id)->update([
            'name'     => $validated['name'],
            'lastname' => $validated['lastname'],
            'phone'    => $validated['phone'],
            'email'    => $validated['email'],
            'active'   => $validated['active'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }

    public function premiumSet($customer_id)
    {
        $data['customer'] = Customer::where('id', $customer_id)->first();
        $data['tariffs']  = CustomerTariffs::get();
        return view('admin.customer-premium-edit', $data);
    }

    public function premiumActivation(Request $request)
    {
        $customer_id   = $request->id;
        $tariff_months = $request->tariff_months;

        $premium_start_date = date('Y-m-d');

        if ($tariff_months == 1) {
            $dateAt = strtotime('+1 MONTH', strtotime($premium_start_date));
        } elseif ($tariff_months == 6) {
            $dateAt = strtotime('+6 MONTH', strtotime($premium_start_date));
        } elseif ($tariff_months == 12) {
            $dateAt = strtotime('+12 MONTH', strtotime($premium_start_date));
        } else {

        }

        $premium_end_date        = date('Y-m-d', strtotime('+1 DAY', $dateAt));
        $premium_end_date_format = date('d.m.Y', strtotime($premium_end_date));

        // Проверка существует ли уже событие
        $event = DB::select("show events where Name = 'premium_status_customer_$customer_id'");
        
        if (! empty($event)) {
            session()->flash('message', 'Premium статус уже активен!');
            return redirect()->back();
        }
       
        // Активация Premium статуса
        Customer::where('id', $request->id)->update([
            'premium'            => true,
            'premium_start_date' => $premium_start_date,
            'premium_end_date'   => $premium_end_date,
        ]);

        PremiumCustomersInfo::create([
            "customer_id"        => $customer_id,
            "tariff_months"      => $tariff_months,
            "premium_start_date" => $premium_start_date,
            "premium_end_date"   => $premium_end_date,
            "payment_invoice"    => $request->payment_invoice,
            "note"               => $request->note
        ]);

       
        // Добавление события на удаление Premium статуса
        DB::statement("CREATE EVENT premium_status_customer_$request->id
            ON SCHEDULE AT '" . $premium_end_date . "'
            DO
            UPDATE customers SET premium = 0, premium_start_date = null, premium_end_date = null WHERE customers.id = $request->id;"
        );

        session()->flash('message', 'Изменения сохранены');
        
        return redirect()->back();
    }
}
