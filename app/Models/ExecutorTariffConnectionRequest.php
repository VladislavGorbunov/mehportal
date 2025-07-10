<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExecutorTariffConnectionRequest extends Model
{
    use HasFactory;

    protected $table = 'executors_tariff_connection_request';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'executor_id',
        'tariff_months',
        'price',
        'title',
        'inn',
        'email',
        'created_at'
    ];
}
