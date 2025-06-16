<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Service;

class CategoryService extends Model
{
    use HasFactory;

    protected $table = 'categories_services';


    public function servicesLimit(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id')->limit(6);
    }

    public function servicesAll(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
