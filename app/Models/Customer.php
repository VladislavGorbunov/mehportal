<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'customers';
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
        'premium_start_date',
        'premium_end_date',
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

    /**
     * Данные о проверке компании
     */
    public function customerCheckData(): HasOne
    {
        return $this->hasOne(CustomerCheckdata::class, 'customer_id');
    }
}
