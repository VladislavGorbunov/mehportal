<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'title',
        'quantity',
        'price',
        'closing_date',
        'description',
        'active',
        'archive'
    ];

    public static function getOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->orderBy('active', 'desc')
            ->paginate(15);
    }

    public static function countActiveOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->where('orders.active', true)
            ->count();
    }

    public static function countArchiveOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->where('orders.archive', true)
            ->count();
    }


    public static function getOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->orderBy('active', 'desc')
            ->paginate(15);
    }

    public static function countActiveOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->having('orders.active', true)
            ->count();
    }

    public static function countArchiveOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->having('orders.archive', true)
            ->count();
    }


    public static function getOrdersForCategories($category_id)
    {
        return DB::table('orders')
            ->join('order_service', 'order_service.order_id', '=', 'orders.id')
            ->join('services', 'services.id', '=', 'order_service.service_id', )
            ->join('categories_services', 'categories_services.id', '=', 'services.category_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->orderBy('active', 'desc')
            ->paginate(15);    
    }

    public static function countActiveOrdersForCategories($category_id)
    {
        return DB::table('orders')
            ->join('order_service', 'order_service.order_id', '=', 'orders.id')
            ->join('services', 'services.id', '=', 'order_service.service_id', )
            ->join('categories_services', 'categories_services.id', '=', 'services.category_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.active', true)
            ->count();   
    }

    public static function countArchiveOrdersForCategories($category_id)
    {
        return DB::table('orders')
            ->join('order_service', 'order_service.order_id', '=', 'orders.id')
            ->join('services', 'services.id', '=', 'order_service.service_id', )
            ->join('categories_services', 'categories_services.id', '=', 'services.category_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
           
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.archive', true)
            ->count();   
    }


    public static function getOrdersForCategoriesRegion($category_id, $region_id)
    {
        return DB::table('categories_services')
            ->join('services', 'services.category_id', '=', 'categories_services.id', )
            ->join('order_service', 'order_service.service_id', '=', 'services.id')
            ->join('orders', 'orders.id', '=', 'order_service.order_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->orderBy('active', 'desc')
            ->paginate(15);    
    }

    public static function countActiveOrdersForCategoriesRegion($category_id, $region_id)
    {
        return DB::table('categories_services')
            ->join('services', 'services.category_id', '=', 'categories_services.id', )
            ->join('order_service', 'order_service.service_id', '=', 'services.id')
            ->join('orders', 'orders.id', '=', 'order_service.order_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.archive', true)
            ->count();     
    }

    public static function countArchiveOrdersForCategoriesRegion($category_id, $region_id)
    {
        return DB::table('categories_services')
            ->join('services', 'services.category_id', '=', 'categories_services.id', )
            ->join('order_service', 'order_service.service_id', '=', 'services.id')
            ->join('orders', 'orders.id', '=', 'order_service.order_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.archive', true)
            ->count();     
    }


    public static function getAllOrders()
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->orderBy('active', 'desc')
            ->limit(15)
            ->get();    
    }


    public static function getAllOrdersRegion($region_id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('customer_companies.region_id', $region_id)
            ->orderBy('active', 'desc')
            ->limit(15)
            ->get();    
    }


    public static function countActiveOrders($region_id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('customer_companies.region_id', $region_id)
            ->where('orders.active', true)
            ->count();  
    }


    public static function countArchiveOrders($region_id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('customer_companies.region_id', $region_id)
            ->where('orders.archive', true)
            ->count();  
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
