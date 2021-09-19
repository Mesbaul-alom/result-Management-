<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
     protected $table = 'teachers_subject';


     public function subject(){

      return $this->belongsToMany(Subject::class,'teachers_subject','teacher_id','subject_id');
      
      
      }
 
   public $timestamps = false;
}
