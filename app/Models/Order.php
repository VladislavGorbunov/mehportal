<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'description'
    ];

    public static function getOrdersForServices($slug)
    {
        return DB::table('orders')
            ->join('order_service', 'orders.id', '=', 'order_service.order_id')
            ->join('services', 'order_service.service_id', '=', 'services.id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'orders.id', 'orders.price', 'services.title as service_title', 'services.slug', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('services.slug', $slug)
            ->paginate(15);
    }


    public static function getOrdersForCategories($category_id)
    {
        return DB::table('categories_services')
            ->join('services', 'services.category_id', '=', 'categories_services.id', )
            ->join('order_service', 'order_service.service_id', '=', 'services.id')
            ->join('orders', 'orders.id', '=', 'order_service.order_id')
            ->join('customer_companies', 'customer_companies.customer_id', '=', 'orders.customer_id')
            ->join('regions', 'regions.id', '=', 'customer_companies.region_id')
            ->select('orders.*', 'customer_companies.title as company_title', 'customer_companies.legal_form as company_legal_form', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            
            ->paginate(15);    
    }
}
