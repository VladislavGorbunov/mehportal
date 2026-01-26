<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExecutorCompany extends Model
{
    use HasFactory;

    protected $table = 'executor_companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'logo',
        'legal_form',
        'title',
        'inn',
        'region_id',
        'address',
        'contact_person',
        'phone',
        'site',
        'extension_number',
        'email',
        'description',
        'machines',
        'executor_id',
    ];


    public static function getCompaniesForServices($service_slug) {
        return DB::table('executor_companies')
            ->join('executor_services', 'executor_services.company_id', '=', 'executor_companies.id')
            ->join('services', 'services.id', '=', 'executor_services.service_id')
            ->join('executors', 'executors.id', '=', 'executor_companies.executor_id')
            ->join('regions', 'regions.id', '=', 'executor_companies.region_id')
            ->select('executor_companies.*', 'executors.premium as executor_premium', 'executors.phone as executor_phone', 'executors.email as executor_email', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->where('executor_companies.active', true)
            ->orderBy('executors.premium', 'desc')
            ->orderBy('executor_companies.id', 'desc')
            ->paginate(15);
    }


    public static function getCompaniesForCategory($category_id) {
        return DB::table('executor_companies')
            ->join('executor_services', 'executor_services.company_id', '=', 'executor_companies.id')
            ->join('services', 'services.id', '=', 'executor_services.service_id')
            ->join('categories_services', 'categories_services.id', '=', 'services.category_id')
            ->join('executors', 'executors.id', '=', 'executor_companies.executor_id')
            ->join('regions', 'regions.id', '=', 'executor_companies.region_id')
            ->select('executor_companies.*', 'executors.premium as executor_premium', 'executors.phone as executor_phone', 'executors.email as executor_email', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('executor_companies.active', true)
            ->groupBy('executor_companies.id', 'regions.name')
            ->orderBy('executors.premium', 'desc')
            ->orderBy('executor_companies.id', 'desc')
            ->paginate(15);
    }


    public static function getCompaniesForServicesRegion($service_slug, $region_id) {
        return DB::table('executor_companies')
            ->join('executor_services', 'executor_services.company_id', '=', 'executor_companies.id')
            ->join('services', 'services.id', '=', 'executor_services.service_id')
            ->join('executors', 'executors.id', '=', 'executor_companies.executor_id')
            ->join('regions', 'regions.id', '=', 'executor_companies.region_id')
            ->select('executor_companies.*', 'executors.premium as executor_premium', 'executors.phone as executor_phone', 'executors.email as executor_email', 'regions.name as region_name')
            ->where('services.slug', $service_slug)
            ->where('executor_companies.active', true)
            ->where('regions.id', $region_id)
            ->orderBy('executors.premium', 'desc')
            ->paginate(15);
    }


    public static function getCompaniesForCategoryRegion(int $region_id, int $category_id) {
        return DB::table('executor_companies')
            ->join('executor_services', 'executor_services.company_id', '=', 'executor_companies.id')
            ->join('services', 'services.id', '=', 'executor_services.service_id')
            ->join('categories_services', 'categories_services.id', '=', 'services.category_id')
            ->join('executors', 'executors.id', '=', 'executor_companies.executor_id')
            ->join('regions', 'regions.id', '=', 'executor_companies.region_id')
            ->select('executor_companies.*', 'executors.premium as executor_premium', 'executors.phone as executor_phone', 'executors.email as executor_email', 'regions.name as region_name')
            ->where('categories_services.id', '=', $category_id)
            ->where('regions.id', $region_id)
            ->where('executor_companies.active', true)
            ->groupBy('executor_companies.id', 'regions.name')
            ->orderBy('executors.premium', 'desc')
            ->paginate(15);
    }


    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'executor_services', 'company_id', 'service_id');
    }
    
    public function servicesLimit(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'executor_services', 'company_id', 'service_id')->limit(8);
    }

    public function executor(): BelongsTo
    {
        return $this->belongsTo(Executor::class);
    }
}
