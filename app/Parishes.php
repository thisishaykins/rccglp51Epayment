<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parishes extends Model
{
    public function getRouteKeyName() {
        return 'slug';
    }

    protected $table = 'parishes';

    public function bank()
    {
        return $this->hasOne(Parishes_Bank::class);
    }

    public function offerings(){
        return $this->hasMany(Parishes_Offerings::class, 'parish_id');
    }

    public function global_offerings(){
        return $this->hasMany(Offering::class, 'parish_id');
    }

    public function givings(){
        return $this->hasMany(Givings::class);
    }

    public function transactions(){
        return $this->hasMany(Offering_Transactions::class);
    }

    public function account()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
