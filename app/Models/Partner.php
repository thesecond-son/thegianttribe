<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'full_name',
        'organization_role',
        'email',
        'phone',
        'interest_area',
    ];
}