<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCheckData extends Model
{
    use HasFactory;

    protected $table = 'customers_check_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'ogrn',
        'kpp',
        'okpo',
        'status_sulst',
        'ur_address',
        'okved_code',
        'okved_name',
        'capital',
        'director_fio',
        'director_post',
        'site',
        'bad_provider',
        'sanctions',
    ];
}
