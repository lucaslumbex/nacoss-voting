<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote_timer extends Model
{
    //
    protected $table = 'vote_timer';

    protected $fillable = [
        'is_vote_active'
    ];
}
