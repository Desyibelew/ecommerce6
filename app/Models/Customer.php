<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
     'applicant_full_name',
     'Sex',
     'age',
     'nationality',
     'kebele_ID',
     'region',
     'zone',
     'woreda',
     'kebele',
     
    ];

}
