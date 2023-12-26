<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'fare',
        'date'
    ];

    function seat(){
        return $this->belongsToMany(Seat::class,'trip_seats');
    }
}
