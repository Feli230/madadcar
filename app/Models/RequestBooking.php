<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestBooking extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'sp_id', 'service_id', 'car_model', 'car_brand', 'car_year', 'comment', 'client_location', 'status', 'date'];   

         // All fields inside $fillable array can be mass-assigned  

}
