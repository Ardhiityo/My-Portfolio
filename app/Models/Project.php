<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
}
