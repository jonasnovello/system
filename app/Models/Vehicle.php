<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year_manufacture',
        'year_model',
        'description',
        'vehicles_categories_id',
        'vehicles_automaker_id',
        'status',
    ];
}
