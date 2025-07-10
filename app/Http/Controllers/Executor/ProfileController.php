<?php
namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\UpdateCustomerProfileRequest;
use App\Models\Executor;
use App\Models\ExecutorTariffConnectionRequest;
use App\Models\ExecutorTariffs;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $executor_id      = Auth::guard('executor')->user()->id;
        $data['executor'] = Executor::where('id', $executor_id)->first();
        return view('executor.profile', $data);
    }

    public function update(UpdateCustomerProfileRequest $request)
    {
        $validated   = $request->validated();
        $executor_id = Auth::guard('executor')->user()->id;

        Executor::where('id', $executor_id)->update([
            'name'     => $validated['name'],
            'lastname' => $validated['lastname'],
            'phone'    => $validated['phone'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }


    public function selectTariff(Request $request)
    {
        $executor_id      = Auth::guard('executor')->user()->id;
        $data['executor'] = Executor::where('id', $executor_id)->first();
        $tariff = ExecutorTariffs::where('months', $request->tariff_months)->first();

        if ($request->method() == 'POST') {
            ExecutorTariffConnectionRequest::create([
                'executor_id' => $executor_id,
                'tariff_months' => $request->tariff_months,
                'price' => $tariff->price,
                'title' => $request->title,
                'inn' => $request->inn,
                'email' => $request->email
            ]);

            session()->flash('message', 'Заявка на Premium тариф отправлена.');
            return redirect()->back();

        } else {
            $data['tariffs']  = ExecutorTariffs::get();
            return view('executor.tariff', $data);
        }
    }

}