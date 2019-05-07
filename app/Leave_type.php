<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_type extends Model
{
    protected $fillable =[
        'leave_type'
    ];

    public function leave_reqests(){
        return $this->hasMany(Leave_reqest::class);
    }
}