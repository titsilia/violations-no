<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     // обращаемся к нужным столбцам
    protected $fillable = [
        'id',
        'type_role',
    ];
}
