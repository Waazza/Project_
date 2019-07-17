<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function animal()
    {
        return $this->hasMany(Animal::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
