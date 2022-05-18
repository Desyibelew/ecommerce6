<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
     'Full_name',
     'Sex',
     'age',
     'nationality',
     'kebele_ID',
     'region',
     'zone',
     'woreda',
     'kebele',
     'trade_type',
     'trade_name',
     'trade_code',
     
    ];

}
