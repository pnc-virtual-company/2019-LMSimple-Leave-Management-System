<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_reqest extends Model
{
    public function leave_type(){
        return $this->belongsTo(leave_type::class);
    }
}
