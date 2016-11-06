<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function cards()
    {
        return $this->hasMany('App\Card');
    }
    public function timeRegisters()
    {
        return $this->hasMany('App\TimeRegister');
    }
    public function calculatedHours()
    {
        return $this->hasMany('App\CalculatedHours');
    }
}
