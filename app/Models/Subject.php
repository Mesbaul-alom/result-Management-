<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
     protected $table = 'subjects';

    public $timestamps = false;
    protected $fillable = ['subject_name','subject_code'];




    public function teacher(){

        return $this->belongsToMany(Teacher::class,'teachers_subject','subject_id','teacher_id',);


        }


    public function student(){

        return $this->belongsToMany(Student::class,'student_subject','subject_id','student_id','id','id')->withPivot('marks');


        }

        public function result(){

            return $this->belongsToMany(Student::class,'add_results','student_id','subject_id');


            }

}
