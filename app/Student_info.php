<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_info extends Model
{
    //
    protected $table = 'student_info';

    protected $fillable =[
        'matric_no', 'name','course','is_registered'
    ];

    public function user(){
        return $this->hasOne('App\User', 'student_info_id' ,'id');
    }

}