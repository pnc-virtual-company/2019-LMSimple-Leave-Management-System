<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_reqest extends Model
{
    public function leave_type(){
        return $this->hasMany(leave_type::class);
    }
}
