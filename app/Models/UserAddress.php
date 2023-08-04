<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_line1',
        'address_line2',
        'postal_code',
        'mobile',
        'city',
        'state',
        'country',
    ];
}
