<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\Region;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    public function generate() 
    {
        $sitemap = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
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
        ';

        // Страницы категорий заказов
        $categories = CategoryService::get();

        foreach ($categories as $category) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/orders/category/'.$category->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы услуг заказов
        $services = Service::get();

        foreach ($services as $service) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/orders/service/'.$service->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы категорий исполнителей
        $categories = CategoryService::get();

        foreach ($categories as $category) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/companies/category/'.$category->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы услуг исполнителей
        $services = Service::get();

        foreach ($services as $service) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/companies/service/'.$service->slug.'</loc>
                <priority>0.8</priority>
	        </url>
            ';
        }

        // Страницы регионов
        $regions = Region::get();

        foreach ($regions as $region) {
            $sitemap .= '
	        <url>
		        <loc>https://mehportal.ru/'.$region->slug.'</loc>
                <priority>0.8</priority>
            </url>';
        }


        // Страницы категорий заказов по регионам
        $categories = CategoryService::get();
        
        foreach ($regions as $region) {
            foreach ($categories as $category) {
                $sitemap .= '
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
                $sitemap .= '
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
                $sitemap .= '
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
                $sitemap .= '
	                <url>
		                <loc>https://mehportal.ru/'.$region->slug.'/companies/service/'.$service->slug.'</loc>
                        <priority>0.8</priority>
	                </url>
                ';
            }
        }

        
        $sitemap .= '</urlset>';

        Storage::disk('public')->put('sitemap.xml', $sitemap);

        
        //http://metall/storage/sitemap.xml
    }    
}
