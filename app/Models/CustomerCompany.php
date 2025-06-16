<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCompany extends Model
{
    use HasFactory;

    protected $table = 'customer_companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
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
        'customer_id',
    ];
}
