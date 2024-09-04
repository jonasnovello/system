<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAutomaker extends Model
{
    use HasFactory;

    protected $table = "vehicles_automaker";
    protected $fillable = ['title'];
}
