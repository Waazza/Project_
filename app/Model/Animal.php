<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function age()
    {
        return $this->belongsTo(Age::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function colorEyes()
    {
        return $this->belongsTo(ColorEyes::class);
    }
    public function furSize()
    {
        return $this->belongsTo(FurSize::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
