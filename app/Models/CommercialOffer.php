<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialOffer extends Model
{
    use HasFactory;

    protected $table = 'commercial_offers';

    protected $fillable = [
        'company_name',
        'company_inn',
        'company_region',
        'contact_person',
        'contact_phone',
        'contact_email',
        'customer_id',
        'executor_id',
        'order_id',
        'cp_text'
    ];


}
