<?php


namespace App\Http\Models;

use Illuminate\Support\Carbon;
use TCG\Voyager\Models\Post as VPost;

class Post extends VPost
{
    public function getUpdatedAtAttribute($value)
    {
       return Carbon::create($value)->format('M d,Y');
    }

}