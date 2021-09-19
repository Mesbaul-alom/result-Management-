<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
     protected $table = 'student_subject';


     // public function students(){
     //     return $this->hasMany(Student)
     // }
 
   public $timestamps = false;
}
