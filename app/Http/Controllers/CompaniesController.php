<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\ExecutorCompany;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CompaniesController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getCompaniesForServices($service_slug)
    {
        $service = Service::where('slug', $service_slug)->first();

        $data['title'] = $service->title .' - каталог предприятий России';
        $data['description'] = $service->title .' - каталог предприятий России';
        
        $data['header_title'] = $service->title .' - каталог предприятий России';
    
        $companies = ExecutorCompany::getCompaniesForServices($service_slug);
        $data['region_name'] = '';
        $data['region_slug'] = '';
        
        $companies_array = [];
      
        foreach ($companies as $company) {
            $companies_array[] = [
                'legal' => $company->legal_form,
                'title' => $company->title,
                'logo' => $company->logo,
                'services' =>ExecutorCompany::find($company->id)->services,
            ];
        }
        
        

        $data['companies'] = $companies_array;

        return view('site.companies', $data);
    }
}
