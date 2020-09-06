<?php


namespace App\Http\Repositories;


use TCG\Voyager\Models\Category;
use App\Http\Models\Post;


class HomeRepository
{

    public function getListCategory(){
        return Category::all();
    }

    public function getListPosts(){
        return Post::with(['category','authorId'])->select('*')->paginate(setting('site.number_panigation'));
    }
}