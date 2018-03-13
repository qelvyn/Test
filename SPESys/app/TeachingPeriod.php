<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingPeriod extends Model
{
    protected $fillable = ['teachingPeriodName','location','startDate','endDate'];
}
