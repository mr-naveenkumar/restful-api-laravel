<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xdata extends Model
{
    use HasFactory;

    protected $table = 'table_info';

    protected $fillable = [
        'name',
        'detail',
        'age'
    ];
}

