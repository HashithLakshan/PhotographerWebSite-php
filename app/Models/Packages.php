<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $fillable = [
        'pkg_name', 
        'pkg_price', 
        'pkg_line1', 
        'pkg_line2', 
        'pkg_line3', 
        'pkg_line4', 
        'pkg_photo'
    ];
}
