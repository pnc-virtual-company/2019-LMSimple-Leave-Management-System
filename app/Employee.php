<?php
  
namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['firstname','lastname','startdate','department_id','position_id'];

    public function departments(){
        return $this->hasMany(Department::class);
    }
    public function positions(){
        return $this->hasMany(Position::class);
    }
    public function leave_reqests(){
        return $this->hasMany(Leave_reqest::class);
    }
}
