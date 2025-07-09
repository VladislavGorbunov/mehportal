<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\ExecutorCompany;
use App\Models\Region;
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
    
        $data['breadcrumb'] = [
            'region' => null,
            'region_slug' => null,
            'category' => $service->title,
        ];

        $companies = ExecutorCompany::getCompaniesForServices($service_slug);
        $data['region_name'] = '';
        $data['region_slug'] = '';
        
        $companies_array = [];
      
        foreach ($companies as $company) {
            $companies_array[] = [
                'legal' => $company->legal_form,
                'title' => $company->title,
                'logo' => $company->logo,
                'region_name' => $company->region_name,
                'address' => $company->address,
                'inn' => $company->inn,
                'company_phone' => $company->phone,
                'company_email' => $company->email,
                'company_site' => $company->site,
                'description' => $company->description,
                'executor_phone' => $company->executor_phone,
                'executor_email' => $company->executor_email,
                'executor_premium' => $company->executor_premium,
                'services' =>ExecutorCompany::find($company->id)->services,
            ];
        }
        
        
        $data['companies'] = $companies_array;
        $data['pagination'] = $companies;

        return view('site.companies', $data);
    }


    public function getCompaniesForCategory($category_slug)
    {
        $category = CategoryService::where('slug', $category_slug)->first();

        $data['title'] = $category->title .' - каталог предприятий России';
        $data['description'] = $category->title .' - каталог предприятий России';
        
        $data['header_title'] = $category->title .' - каталог предприятий России';

        $data['breadcrumb'] = [
            'region' => null,
            'region_slug' => null,
            'category' => $category->title,
        ];

        $companies = ExecutorCompany::getCompaniesForCategory($category->id);
        $data['region_name'] = '';
        $data['region_slug'] = '';
        
        $companies_array = [];
      
        foreach ($companies as $company) {
            $companies_array[] = [
                'legal' => $company->legal_form,
                'title' => $company->title,
                'logo' => $company->logo,
                'region_name' => $company->region_name,
                'address' => $company->address,
                'inn' => $company->inn,
                'company_phone' => $company->phone,
                'company_email' => $company->email,
                'company_site' => $company->site,
                'description' => $company->description,
                'executor_phone' => $company->executor_phone,
                'executor_email' => $company->executor_email,
                'executor_premium' => $company->executor_premium,
                'services' =>ExecutorCompany::find($company->id)->services,
            ];
        }
        
        
        $data['companies'] = $companies_array;
        $data['pagination'] = $companies;

        return view('site.companies', $data);
    }


    public function getCompaniesForCategoryRegion($region_slug, $category_slug)
    {
        $category = CategoryService::where('slug', $category_slug)->first();
        $region = Region::where('slug', $region_slug)->first();
        
        $data['title'] = $category->title .' - каталог предприятий ' . $region->name_in;
        $data['description'] = $category->title .' - каталог предприятий ' . $region->name_in;
        
        $data['header_title'] = $category->title .' - каталог предприятий ' . $region->name_in;
    
        $data['breadcrumb'] = [
            'region' => $region->name_in,
            'region_slug' => $region->slug,
            'category' => $category->title,
        ];

        $companies = ExecutorCompany::getCompaniesForCategoryRegion($region->id, $category->id);
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;
        
        $companies_array = [];
      
        foreach ($companies as $company) {
            $companies_array[] = [
                'legal' => $company->legal_form,
                'title' => $company->title,
                'logo' => $company->logo,
                'region_name' => $company->region_name,
                'address' => $company->address,
                'inn' => $company->inn,
                'company_phone' => $company->phone,
                'company_email' => $company->email,
                'company_site' => $company->site,
                'description' => $company->description,
                'executor_phone' => $company->executor_phone,
                'executor_email' => $company->executor_email,
                'executor_premium' => $company->executor_premium,
                'services' =>ExecutorCompany::find($company->id)->services,
            ];
        }
        
        
        $data['companies'] = $companies_array;
        $data['pagination'] = $companies;

        return view('site.companies', $data);
    }


    public function getCompaniesForServicesRegion($region_slug, $service_slug)
    {
        $service = Service::where('slug', $service_slug)->first();
        $region = Region::where('slug', $region_slug)->first();
        $data['title'] = $service->title .' - каталог предприятий ' . $region->name_in;
        $data['description'] = $service->title .' - каталог предприятий ' . $region->name_in;
        $data['header_title'] = $service->title .' - каталог предприятий ' . $region->name_in;
        
        $data['breadcrumb'] = [
            'region' => $region->name_in,
            'region_slug' => $region->slug,
            'category' => $service->title,
        ];

        $companies = ExecutorCompany::getCompaniesForServicesRegion($service_slug, $region->id);
        
        $data['region_name'] = $region->name;
        $data['region_slug'] = $region->slug;
        
        $companies_array = [];
      
        foreach ($companies as $company) {
            $companies_array[] = [
                'legal' => $company->legal_form,
                'title' => $company->title,
                'logo' => $company->logo,
                'region_name' => $company->region_name,
                'address' => $company->address,
                'inn' => $company->inn,
                'company_phone' => $company->phone,
                'company_email' => $company->email,
                'company_site' => $company->site,
                'description' => $company->description,
                'executor_phone' => $company->executor_phone,
                'executor_email' => $company->executor_email,
                'executor_premium' => $company->executor_premium,
                'services' =>ExecutorCompany::find($company->id)->services,
            ];
        }
        
        
        $data['companies'] = $companies_array;
        $data['pagination'] = $companies;

        return view('site.companies', $data);
    }

    
}
