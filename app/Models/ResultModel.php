<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    public $timestamps = false;
    protected $table= "add_result";
    protected $primaryKey = 'id';
}
