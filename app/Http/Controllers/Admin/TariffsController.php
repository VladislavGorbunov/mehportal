<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\CustomerTariffConnectionRequest;
use App\Models\ExecutorTariffConnectionRequest;
use Illuminate\Support\Facades\DB;

class TariffsController extends Controller
{

    public function customersPremiumRequests()
    {
        $data['requests'] = CustomerTariffConnectionRequest::paginate(15);
        return view('admin.premium-customer-request', $data);
    }

    public function deleteCustomerRequest($id) 
    {
        $request = CustomerTariffConnectionRequest::find($id);
        $request->delete();
        session()->flash('message', 'Заявка удалена');
        return redirect()->back();
    }

    public function executorsPremiumRequests()
    {
        $data['requests'] = ExecutorTariffConnectionRequest::paginate(15);
        return view('admin.premium-executor-request', $data);
    }

    public function deleteExecutorRequest($id) 
    {
        $request = ExecutorTariffConnectionRequest::find($id);
        $request->delete();
        session()->flash('message', 'Заявка удалена');
        return redirect()->back();
    }

}
