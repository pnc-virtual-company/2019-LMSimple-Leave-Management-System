<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_reqest extends Model
{
 
    protected $fillable = [
        'startdate', 'enddate', 'duration','leave_type_id','employee_id'
    ];

    public function leave_type(){
        return $this->belongsTo(Leave_type::class,'leave_type_id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }

}
