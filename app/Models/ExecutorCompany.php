<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'extension_number',
        'email',
        'description',
        'executor_id',
    ];


    public static function getCompaniesForServices($service_slug) {
        return DB::table('executor_companies')
            ->join('executor_services', 'executor_services.company_id', '=', 'executor_companies.id')
            ->join('services', 'services.id', '=', 'executor_services.service_id')
            ->select('executor_companies.*')
            ->where('services.slug', $service_slug)
            ->get();
    }


    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'executor_services', 'company_id', 'service_id');
    }
}
