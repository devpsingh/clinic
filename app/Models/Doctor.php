<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['speciality_id','name','speciality','email',
    'mobile','clinic_name','address','city','pin','age',
    'gender','alt_contact','timeslot','dr_photo_path'
    ];
}
