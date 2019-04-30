<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_type extends Model
{
    public function leave_request(){
        return $this->belongsTo(Leave_reqest::class);
    }
}