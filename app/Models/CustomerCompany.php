<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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


    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
