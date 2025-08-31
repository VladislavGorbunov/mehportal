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
        'order_image',
        'order_archive_file',
        'quantity',
        'price',
        'closing_date',
        'description',
        'active',
        'archive',
        'created_at'
    ];


    public static function getOrder(int $id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'customer_companies.title as company_title', 
            'customer_companies.legal_form as company_legal_form', 'customer_companies.inn as company_inn', 'customer_companies.phone as phone', 'customer_companies.address as address', 'customer_companies.contact_person as person', 'customer_companies.extension_number as extension_number', 'customer_companies.email as email',
            'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium', 'customers.id as customer_id')
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'customer_companies.inn', 'customer_companies.phone', 'customer_companies.address', 'customer_companies.email', 'customer_companies.contact_person', 'customer_companies.extension_number', 'regions.name', 'regions.slug')
            ->where('orders.id', $id)
            ->where('customers.active', true)
            ->first();
    }



    public static function getOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('services.slug', $service_slug)
            ->where('customers.active', true)
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
            ->paginate(15);
    }

    public static function countActiveOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug')
            ->where('services.slug', $service_slug)
            ->where('orders.active', true)
            ->where('customers.active', true)
            ->count();
    }

    public static function countArchiveOrdersForServices($service_slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug')
            ->where('services.slug', $service_slug)
            ->where('orders.archive', true)
            ->where('customers.active', true)
            ->count();
    }


    public static function getOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->where('customers.active', true)
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
            ->paginate(15);
    }

    public static function countActiveOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->having('orders.active', true)
            ->where('customers.active', true)
            ->count();
    }

    public static function countArchiveOrdersForServicesRegion($service_slug, $region_id)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*')
            ->where('services.slug', $service_slug)
            ->where('customer_companies.region_id', $region_id)
            ->having('orders.archive', true)
            ->where('customers.active', true)
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('categories_services.id', '=', $category_id)
            ->where('customers.active', true)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name', 'regions.slug')
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.active', true)
            ->where('customers.active', true)
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.archive', true)
            ->where('customers.active', true)
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->where('customers.active', true)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->where('orders.active', true)
            ->where('customers.active', true)
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
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('customer_companies.region_id', $region_id)
            ->groupBy('orders.id', 'customer_companies.title', 'customer_companies.legal_form', 'regions.name')
            ->having('orders.archive', true)
            ->where('customers.active', true)
            ->count();     
    }


    public static function getAllOrders()
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('customers.active', true)
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
            ->limit(10)
            ->get();    
    }


    public static function getAllOrdersRegion($region_id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name', 'regions.slug as region_slug', 'customers.premium as customer_premium')
            ->where('customer_companies.region_id', $region_id)
            ->where('customers.active', true)
            ->orderBy('orders.active', 'desc')
            ->orderBy('customers.premium', 'desc')
            ->orderBy('orders.id', 'desc')
            ->limit(15)
            ->get();    
    }


    public static function countActiveOrders($region_id = null)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('customer_companies.region_id', $region_id)
            ->where('orders.active', true)
            ->where('customers.active', true)
            ->count();  
    }


    public static function countArchiveOrders($region_id)
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('customer_companies.region_id', $region_id)
            ->where('orders.archive', true)
            ->where('customers.active', true)
            ->count();  
    }


    public static function countArchiveOrdersNoRegion()
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('orders.archive', true)
            ->where('customers.active', true)
            ->count();  
    }



    public static function countActiveOrdersNoRegion()
    {
        return DB::table('orders')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
           
            ->where('orders.active', true)
            ->where('customers.active', true)
            ->count();  
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
