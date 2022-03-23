<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserT extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'age',
        'email',
        'password',
        'birthday',
        'status',
    ];
}
