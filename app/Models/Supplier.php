<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Supplier extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'suppliers';

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

}