<?php
namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Executor\AddExecutorCompanyRequest;
use App\Http\Requests\Executor\UpdateExecutorCompanyRequest;
use App\Models\CategoryService;
use App\Models\Executor;
use App\Models\ExecutorCompany;
use App\Models\ExecutorService;
use App\Models\LegalForm;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $executor_id                 = Auth::guard('executor')->user()->id;
        $company                     = Executor::find($executor_id)->executorCompanies;
        $services                    = ExecutorCompany::find($company->id)->services;
        $data['legal_forms']         = LegalForm::get();
        $data['regions']             = Region::get();
        $data['categories_services'] = CategoryService::get();
        $data['company']             = $company;
        $services_array = [];

        foreach ($services as $service) {
            $services_array[] = $service->id;
        }

        $data['services_array'] = $services_array;

        return view('executor.my-company', $data);
    }

    public function addCompanyPage()
    {
        $executor_id   = Auth::guard('executor')->user()->id;
        $company_count = Executor::find($executor_id)->executorCompanies()->count();

        if ($company_count > 0) {
            session()->flash('message', 'Вы уже добавили компанию.');
            return redirect('/executor');
        }

        $data['regions']             = Region::get();
        $data['legal_forms']         = LegalForm::get();
        $data['categories_services'] = CategoryService::get();
        return view('executor.add-company', $data);
    }

    public function store(AddExecutorCompanyRequest $request)
    {
        $validated = $request->validated();

        if (array_key_exists('logo', $validated)) {
            $logo = $validated['logo'];
        } else {
            $logo = null;
        }

        $executorCompany = ExecutorCompany::create([
            "logo"             => self::uploadLogo($logo),
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
            "executor_id"      => Auth::guard('executor')->user()->id,
            "active"           => true,
        ]);

        foreach ($validated['categories'] as $key => $category) {
            ExecutorService::create([
                'service_id' => $category,
                'company_id' => $executorCompany->id,
            ]);
        }

        return redirect('/executor');
    }

    public static function uploadLogo($logo)
    {
        if (empty($logo)) {
            return 'no-logo.jpg';
        }

        // Загрузка файла в папку storage/app/public/executors_logo
        $upload_file = $logo->store('', 'executors_logo');

        $storagePath = storage_path() . '\\app\\public\\' . 'executors_logo\\';
        $filePath    = storage_path() . '\\app\\public\\' . 'executors_logo\\' . $upload_file;

        // Уменьшение и обрезка изображения
        $image = new \Imagick($filePath);

        $geometry = $image->getImageGeometry();
        if ($geometry['width'] > 500) {
            $image->resizeImage(500, 0, 0, 0);
        }

        // Перезапись изображения
        $image->writeImage($filePath);

        return $upload_file;
    }

    public function update(UpdateExecutorCompanyRequest $request)
    {
        $validated   = $request->validated();
        $executor_id = Auth::guard('executor')->user()->id;
        $company = ExecutorCompany::where('executor_id', $executor_id)->first('id');
        
        ExecutorCompany::where('executor_id', $executor_id)->update([
            // "logo"             => self::uploadLogo($logo),
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
        ]);

        ExecutorService::where('company_id', $company->id)->delete();
        
        foreach ($validated['categories'] as $key => $category) {
            ExecutorService::create([
                'service_id' => $category,
                'company_id' => $company->id,
            ]);
        }

        session()->flash('message', 'Изменения сохранены');

        return redirect()->back();
    }

}
