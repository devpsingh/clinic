<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUpdate extends Model
{
    use HasFactory;
    protected $fillable=['updated_date','updated_timeslot','dr_id'];
}
