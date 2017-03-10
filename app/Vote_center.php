<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote_center extends Model
{
    //
    protected $table = 'vote_center';

    protected $fillable = [
        'category', 'chosen_candidate', 'chosen_candidate_pic', 'voter_email', 'voter_matric_no',
    ];
}
