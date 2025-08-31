<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryService;
use App\Models\ExecutorCompany;
use App\Models\Service;
use App\Models\Region;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    public function generate() 
    {
        $categories = CategoryService::get();
        $services = Service::get();
        $regions = Region::get();
        $executor_companies = ExecutorCompany::get();

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Статические страницы
        $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru</loc>
                <priority>1.0</priority>
	        </url>
            <url>
		        <loc>https://mehportal.ru/about</loc>
                <priority>0.8</priority>
	        </url>
            <url>
		        <loc>https://mehportal.ru/contacts</loc>
                <priority>0.8</priority>
	        </url>
            <url>
		        <loc>https://mehportal.ru/tariffs</loc>
                <priority>0.8</priority>
	        </url>
	        <url>
		        <loc>https://mehportal.ru/privacy-policy</loc>
                <priority>0.8</priority>
	        </url>
	        <url>
		        <loc>https://mehportal.ru/dogovor-oferta</loc>
                <priority>0.8</priority>
	        </url>
	        <url>
		        <loc>https://mehportal.ru/login/executor</loc>
                <priority>0.8</priority>
	        </url>
	        <url>
		        <loc>https://mehportal.ru/login/customer</loc>
                <priority>0.8</priority>
	        </url>
        ';

        // Страницы категорий заказов
        foreach ($categories as $category) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/orders/category/'.$category->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы услуг заказов
        foreach ($services as $service) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/orders/service/'.$service->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы категорий исполнителей
        foreach ($categories as $category) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/companies/category/'.$category->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы услуг исполнителей
        foreach ($services as $service) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/companies/service/'.$service->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы регионов
        foreach ($regions as $region) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/'.$region->slug.'</loc>
                <priority>0.8</priority>
            </url>';
        }

        $sitemap .= '</urlset>';

        Storage::disk('public')->put('sitemap.xml', $sitemap);

        
        $sitemap2 = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        // Страницы категорий заказов по регионам
        foreach ($regions as $region) {
            foreach ($categories as $category) {
                $sitemap2 .= '
	                <url>
		                <loc>https://mehportal.ru/'.$region->slug.'/orders/category/'.$category->slug.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
            }
        }

        // Страницы категорий исполнителей по регионам
        $categories = CategoryService::get();
        
        foreach ($regions as $region) {
            foreach ($categories as $category) {
                $sitemap2 .= '
	                <url>
		                <loc>https://mehportal.ru/'.$region->slug.'/companies/category/'.$category->slug.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
            }
        }

        // Страницы услуг заказов по регионам
        $services = Service::get();
        
        foreach ($regions as $region) {
            foreach ($services as $service) {
                $sitemap2 .= '
	                <url>
		                <loc>https://mehportal.ru/'.$region->slug.'/orders/service/'.$service->slug.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
            }
        }

        // Страницы услуг исполнителей по регионам
        $services = Service::get();
        
        foreach ($regions as $region) {
            foreach ($services as $service) {
                $sitemap2 .= '
	                <url>
		                <loc>https://mehportal.ru/'.$region->slug.'/companies/service/'.$service->slug.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
            }
        }


        $sitemap2 .= '</urlset>';

        Storage::disk('public')->put('sitemap2.xml', $sitemap2);


        $sitemap3 = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        // Страницы компаний
        foreach ($executor_companies as $company) {
           
                $sitemap3 .= '
	                <url>
		                <loc>https://mehportal.ru/company/'.$company->inn.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
           
        }
        
        $sitemap3 .= '</urlset>';
        
        Storage::disk('public')->put('sitemap3.xml', $sitemap3);
        //http://metall/storage/sitemap.xml
    }    
}
