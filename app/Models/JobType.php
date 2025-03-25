<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $guarded = [];

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
