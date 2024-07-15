<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingNew extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location_id', 'package_id', 'date','status',];

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }

    public function package()
    {
        return $this->belongsTo(Packages::class);
    }
    
}
