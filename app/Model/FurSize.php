<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FurSize extends Model
{
    public function animal()
    {
        return $this->hasMany(Animal::class);
    }
}
