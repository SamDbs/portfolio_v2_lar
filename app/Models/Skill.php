<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }
}
