<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dataslider extends Model
{
    protected $table = 'datasliders';
    protected $fillable = ['company_name', 'logo_url'];
}
