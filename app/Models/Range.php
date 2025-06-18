<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    protected $table = 'range';

     protected $fillable = ['starting_price', 'ending_price'];
}
