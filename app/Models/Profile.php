<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pronoun()
    {
        return $this->belongsTo(Pronoun::class);
    }
}
