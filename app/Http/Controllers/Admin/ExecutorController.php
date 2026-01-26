<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCustomerProfileRequest;
use App\Http\Requests\Admin\UpdateExecutorCompanyRequest;
use App\Models\Executor;
use App\Models\ExecutorTariffs;
use App\Models\ExecutorCompany;
use App\Models\PremiumExecutorsInfo;
use App\Models\LegalForm;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Mail\ExecutorPremiumActivated;
use Illuminate\Support\Facades\Mail;

class ExecutorController extends Controller
{
    //
    public function getActiveExecutors()
    {
        $data['executors'] = Executor::where('active', true)->paginate(10);
        $data['title']     = 'Активные исполнители';
        return view('admin.executors', $data);
    }

    public function getNoActiveExecutors()
    {
        $data['executors'] = Executor::where('active', false)->paginate(15);
        $data['title']     = 'Не активные исполнители';
        return view('admin.executors', $data);
    }

    public function getPremiumExecutors()
    {
        $data['executors'] = Executor::where('premium', true)->paginate(10);
        $data['title']     = 'Premium исполнители';
        return view('admin.executors', $data);
    }

    public function getExecutorsCompanies()
    {
        $data['executors_companies'] = ExecutorCompany::paginate(10);
        
        $data['title']     = 'Компании исполнителей';
        return view('admin.executors-companies', $data);
    
    }

    public function executorEdit($id)
    {
        $data['executor'] = Executor::where('id', $id)->first();
        return view('admin.executor-edit', $data);
    }

    public function update(UpdateCustomerProfileRequest $request)
    {
        $validated = $request->validated();

        Executor::where('id', $request->id)->update([
            'name'     => $validated['name'],
            'lastname' => $validated['lastname'],
            'phone'    => $validated['phone'],
            'email'    => $validated['email'],
            'active'   => $validated['active'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }
    
    
    public function executorDelete($id)
    {
        Executor::where('id', $id)->delete();

        session()->flash('message', 'Исполнитель удалён');

        return redirect()->back();
    }
    

    public function premiumSet($executor_id)
    {
        $data['executor'] = Executor::where('id', $executor_id)->first();
        $data['tariffs']  = ExecutorTariffs::get();
        return view('admin.executor-premium-edit', $data);
    }

    public function premiumActivation(Request $request)
    {
        $executor_id   = $request->id;
        $tariff_months = $request->tariff_months;
        $executorInfo   = Executor::where('id', $executor_id)->first();

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
        $event = DB::select("show events where Name = 'premium_status_customer_$executor_id'");
        
        if (! empty($event)) {
            session()->flash('message', 'Premium статус уже активен!');
            return redirect()->back();
        }
       
        // Активация Premium статуса
        Executor::where('id', $request->id)->update([
            'premium'            => true,
            'premium_start_date' => $premium_start_date,
            'premium_end_date'   => $premium_end_date,
        ]);

        PremiumExecutorsInfo::create([
            "executor_id"        => $executor_id,
            "tariff_months"      => $tariff_months,
            "premium_start_date" => $premium_start_date,
            "premium_end_date"   => $premium_end_date,
            "payment_invoice"    => $request->payment_invoice,
            "note"               => $request->note
        ]);

        // Отправка уведомления на почту            
        Mail::mailer('smtp')->to($executorInfo->email)->send(new ExecutorPremiumActivated($premium_end_date_format));
       
        // Добавление события на удаление Premium статуса
        DB::statement("CREATE EVENT premium_status_executor_$request->id
            ON SCHEDULE AT '" . $premium_end_date . "'
            DO
            UPDATE executors SET premium = 0, premium_start_date = null, premium_end_date = null WHERE executors.id = $request->id;"
        );

        session()->flash('message', 'Изменения сохранены');
        
        return redirect()->back();
    }

    public function editExecutorCompany($id)
    {
        $data['company'] = ExecutorCompany::where('id', $id)->first();
        $data['legal_forms'] = LegalForm::get();
        $data['regions'] = Region::get();
        return view('admin.executor-company-edit', $data);
    }
    
    
    public function deleteExecutorCompany($id) 
    {
        ExecutorCompany::where('id', $id)->delete();
        return redirect('/admin/executors/active');
        
    }
    
    public function updateExecutorCompany(UpdateExecutorCompanyRequest $request)
    {
        $validated = $request->validated();
        
        ExecutorCompany::where('id', $request->id)->update([
            'legal_form' => $validated['legal_form'],
            'title' => $validated['title'],
            'inn' => $validated['inn'],
            'region_id' => $validated['region_id'],
            'contact_person' => $validated['contact_person'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'site' => $validated['site'],
            'active' => $validated['active'],
            'extension_number' => $validated['extension_number'],
            'address' => $validated['address'],
            'description' => $validated['description'],
            'machines' => $validated['machines'],
        ]);

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }
}
