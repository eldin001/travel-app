<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = ['journey_id', 'date'];

    public function journey()
    {
        return $this->belongsTo(Journey::class);
    }

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }
}