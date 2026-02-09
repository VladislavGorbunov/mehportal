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
    
    public function delete(Request $request, $id) 
    {
        if (Auth::guard('executor')->user()->id == $id) {
            Executor::where('id', $id)->delete();

            Auth::guard('executor')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        } else {
            return redirect('/executor/profile');
        }
    }


    public function selectTariff(Request $request)
    {
        $executor_id      = Auth::guard('executor')->user()->id;
        $data['executor'] = Executor::where('id', $executor_id)->first();
        $tariff = ExecutorTariffs::where('months', $request->tariff_months)->first();

        if ($request->method() == 'POST') {
            $this->payment();
            die;
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


    public function payment() 
    {   
    
    $curl = curl_init();

    $string = 140000 . "Подключение Premium тарифа" . 21050 . 'Ho!n*TPF^OTygako' . '1770482068219DEMO';
    
    $token = hash('sha256', $string);
   
    $data = [
        'TerminalKey' => '1770482068219DEMO',
        'Amount' => 140000,
        'OrderId' => 21050,
        'Token' => $token,
        'Description' => 'Подключение Premium тарифа',
    
        'Receipt' => [
            'Items' => [
                [
                    'Name' => 'Подключение Premium тарифа',
                    'Price' => 140000,
                    'Quantity' => 1,
                    'Amount' => 140000,
                    'Tax' => 'none',
                ]
            ],
            
            'FfdVersion' => '1.05',
            'Email' => 'a@test.ru',
            'Phone' => '+79031234567',
            'Taxation' => 'usn_income',
        ],
    ];


    $postfilds = json_encode($data, JSON_UNESCAPED_UNICODE);
    

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://rest-api-test.tinkoff.ru/v2/Init',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postfilds,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Accept: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    var_dump($response);

    }
}