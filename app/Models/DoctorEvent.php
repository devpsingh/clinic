<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorEvent extends Model
{
    use HasFactory;
    protected $fillable=['email','title','desc','eventdate','eventdateto'];
}
