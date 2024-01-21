<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'owner',
        'phone',
        'email',
        'country',
        'city',
        'address',
        'logo',
        'website',
        'facebook',
        'instagram',
        'signature',
        'currency',
        'timezone',
        'language',
        'date_format',
        'time_format',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
    ];
}
