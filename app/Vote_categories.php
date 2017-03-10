<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote_categories extends Model
{
    //
    protected $fillable = [
        'cat_name', 'max_no_of_candidate',
    ];
}
