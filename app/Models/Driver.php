<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
     protected $fillable = ['name', 'email', 'phone', 'license_number'];
     
    use HasFactory;
}
