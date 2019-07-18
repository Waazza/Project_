<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function age()
    {
        return $this->belongsTo(Age::class, 'age_id_fk');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id_fk');
    }
    public function colorEyes()
    {
        return $this->belongsTo(ColorEyes::class, 'color_eyes_id_fk');
    }
    public function furSize()
    {
        return $this->belongsTo(FurSize::class, 'fur_size_id_fk');
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id_fk');
    }
    public function race()
    {
        return $this->belongsTo(Race::class, 'race_id_fk');
    }
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id_fk');
    }
    public function statu()
    {
        return $this->belongsTo(Statu::class, 'status_id_fk');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
}
