<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }
}
