<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chartjs extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'dogfoodname',
        'tanpakushitsu',
        'vitamin',
        'shishitsu',
      ];
    
   
}
