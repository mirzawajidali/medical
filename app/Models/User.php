<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'profile',
        'password',
        'is_admin',
        'is_verify',
        'resest_code',
        'created_at',
        'updated_at'
    ];

}
