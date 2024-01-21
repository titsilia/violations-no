<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
        // обращаемся к нужным столбцам
        protected $fillable = [
            'id',
            'auto_number',
            'description',
            'patronymic',
            'status_id',
            'user_id',
        ];
}
