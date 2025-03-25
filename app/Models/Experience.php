<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $guarded = [];

    protected function casts()
    {
        return [
            'image' => 'array'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }
}
