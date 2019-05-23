<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable=['position'];
    public function employees(){ 
        return $this->hasMany(Employee::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
