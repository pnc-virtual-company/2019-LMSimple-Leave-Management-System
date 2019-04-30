<?php
  
namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['firstname','lastname'];
    public function department(){
        return $this->hasMany(Department::class);
    }
    public function position(){
        return $this->hasMany(Position::class);
    }
}
