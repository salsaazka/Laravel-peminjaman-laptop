<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'purposes',
        'ket',
        'nis',
        'region',
        'teacher',
        'date',
        'status',
        'done_time',
        'user_id'
    ];

}
