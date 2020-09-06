<?php


namespace App\Http\Repositories;


use App\Http\Models\Post;
use TCG\Voyager\Models\Category;

class CategoryRepository
{
    public function getListCategory(){
        return Category::all();
    }
}