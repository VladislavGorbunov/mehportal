<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumCustomersInfo extends Model
{
    use HasFactory;

    protected $table = 'premium_customers_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'tariff_months',
        'premium_start_date',
        'premium_end_date',
        'payment_invoice',
        'note',
        'created_at',
        'updated_at'
    ];
}
