<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_reqest extends Model
{
 
    protected $fillable = [
        'startdate', 'enddate', 'duration','leave_type_id',
    ];

    public function leave_type(){
        return $this->hasMany(leave_type::class);
    }

}
