<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeRegister extends Model
{
    //
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
