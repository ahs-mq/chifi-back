<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    // Important for saving data via Waitlist::create()
    protected $fillable = ['contact', 'type'];
}
