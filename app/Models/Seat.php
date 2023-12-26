<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    function trip(){
        return $this->belongsToMany(Trip::class, 'trip_seats');
    }
}
