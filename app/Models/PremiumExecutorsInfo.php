<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumExecutorsInfo extends Model
{
    use HasFactory;

    protected $table = 'premium_executors_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'executor_id',
        'tariff_months',
        'premium_start_date',
        'premium_end_date',
        'payment_invoice',
        'note',
        'created_at',
        'updated_at'
    ];
}
