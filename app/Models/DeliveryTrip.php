<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryTrip extends Model
{
    use HasFactory;

    protected $fillable = ['isBoxOpen', 'box_code', 'humidity', 'temperature', 'location_link'];
}
