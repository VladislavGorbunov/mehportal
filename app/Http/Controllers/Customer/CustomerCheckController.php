<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\CustomerCheckData;
use App\Models\CustomerCompany;
use Illuminate\Support\Facades\Http;

class CustomerCheckController extends Controller
{
    private static $key = '9YBv6JtuKo9A718U';

    public static function addCustomerCheckData(int $customer_id)
    {
        $customer = CustomerCompany::where('customer_id', $customer_id)->first();
        $response = Http::get('https://api.checko.ru/v2/company?key=' . self::$key . '&inn=' . $customer->inn . '');

        $data = $response->json($key = null, $default = null);
       
        if (array_key_exists('data', $data) && ! empty($data['data'])) {
            self::addData($customer_id, $data);
        }

    }

    public static function addData($customer_id, $data)
    {
        $count = CustomerCheckData::where('customer_id', $customer_id)->count();

        if ($count == 0) {
            CustomerCheckData::create([
                "customer_id"   => $customer_id,
                "ogrn"          => $data['data']['ОГРН'],
                "kpp"           => $data['data']['КПП'],
                "okpo"          => $data['data']['ОКПО'],
                "ur_address"    => $data['data']['ЮрАдрес']['АдресРФ'],
                "status_sulst"  => $data['data']['Статус']['Код'],
                "okved_code"    => $data['data']['ОКВЭД']['Код'],
                "okved_name"    => $data['data']['ОКВЭД']['Наим'],
                "capital"       => $data['data']['УстКап']['Сумма'],
                "director_fio"  => $data['data']['Руковод'][0]['ФИО'],
                "director_post" => $data['data']['Руковод'][0]['НаимДолжн'],
                "site"          => $data['data']['Контакты']['ВебСайт'],
                "bad_provider"  => $data['data']['НедобПост'],
                "sanctions"     => $data['data']['Санкции'],

            ]);
        } else {
            CustomerCheckData::where('customer_id', $customer_id)->update([
                "customer_id"   => $customer_id,
                "ogrn"          => $data['data']['ОГРН'],
                "kpp"           => $data['data']['КПП'],
                "okpo"          => $data['data']['ОКПО'],
                "ur_address"    => $data['data']['ЮрАдрес']['АдресРФ'],
                "status_sulst"  => $data['data']['Статус']['Код'],
                "okved_code"    => $data['data']['ОКВЭД']['Код'],
                "okved_name"    => $data['data']['ОКВЭД']['Наим'],
                "capital"       => $data['data']['УстКап']['Сумма'],
                "director_fio"  => $data['data']['Руковод'][0]['ФИО'],
                "director_post" => $data['data']['Руковод'][0]['НаимДолжн'],
                "site"          => $data['data']['Контакты']['ВебСайт'],
                "bad_provider"  => $data['data']['НедобПост'],
                "sanctions"     => $data['data']['Санкции'],
            ]);
        }
    }

}
