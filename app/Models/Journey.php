<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_date', 'end_date'];

    public function days()
    {
        return $this->hasMany(Day::class);
    }
}
