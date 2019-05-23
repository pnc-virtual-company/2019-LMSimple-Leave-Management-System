<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=['department'];
    public function employees(){ 
        return $this->hasMany(Employee::class);
    } 
    public function users(){
    return $this->hasMany(User::class);
}
}
