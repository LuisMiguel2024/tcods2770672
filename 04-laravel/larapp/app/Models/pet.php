<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kind',
        'breed',
        'phone',
        'email',
        'password',
        'role'
    ];
}
