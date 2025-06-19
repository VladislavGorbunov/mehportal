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


    /**
     * Получить компании заказчика
     */
    public function customerCompanies(): HasOne
    {
        return $this->hasOne(CustomerCompany::class);
    }
}
