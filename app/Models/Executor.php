<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Executor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'executors';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'active',
        'premium',
        'email',
        'password',
    ];


    public function executorCompanies(): HasOne
    {
        return $this->hasOne(ExecutorCompany::class);
    }


}
