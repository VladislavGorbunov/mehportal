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

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'hhttps://rest-api-test.tinkoff.ru/v2/Init',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{"TerminalKey":"1770482068262","Amount":140000,"OrderId":"21050","Token":"7241ac8307f349afb7bb9dda760717721bbb45950b97c67289f23d8c69cc7b96","Description":"Подарочная карта на 1400.00 рублей","CustomerKey":"string","Recurrent":"Y","PayType":"O","Language":"ru","NotificationURL":"string","SuccessURL":"string","FailURL":"string","DATA":{"additionalProperties":"string","OperationInitiatorType":"0"},"Receipt":{"Items":[{"Name":"Наименование товара 1","Price":10000,"Quantity":1,"Amount":10000,"PaymentMethod":"full_payment","PaymentObject":"commodity","Tax":"vat10","Ean13":"0123456789","ShopCode":"12345","AgentData":{"AgentSign":"paying_agent","OperationName":"Позиция чека","Phones":["+790912312398"],"ReceiverPhones":["+79221210697","+79098561231"],"TransferPhones":["+79221210697"],"OperatorName":"TBank","OperatorAddress":"г. Тольятти","OperatorInn":"7710140679"},"SupplierInfo":{"Phones":["+79221210697","+79098561231"],"Name":"ООО Вендор товара","Inn":"7710140679"}}],"FfdVersion":"1.05","Email":"a@test.ru","Phone":"+79031234567","Taxation":"osn","Payments":{"Cash":90000,"Electronic":50000,"AdvancePayment":0,"Credit":0,"Provision":0}},"Shops":[{"ShopCode":"700456","Amount":10000,"Name":"Товар","Fee":"500"}]}',
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