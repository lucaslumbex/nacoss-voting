<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    //
    public $directory = '/image/';

//candidates
    protected $table = 'candidates';

    protected $fillable =[
        'category', 'cand_name','cand_course','cand_picture','cand_campaign_pic','cand_campaign_memo'
    ];

//    public function getPathAttribute($value){
//        return $this->directory . $value;
//    }
}
