<?php


namespace App\Http\Repositories;


use App\Http\Models\Post;
use TCG\Voyager\Models\Category;

class PostRepository
{

    public function getReleatedPosts($catId,$id)
    {
        return Post::with(['category', 'authorId'])
            ->select('*')
            ->where('category_id', $catId)
            ->where('id','<>',$id)
            ->paginate(setting('site.number_panigation'));
    }

    public function getPostBySlug($slug)
    {
        return Post::with(['category', 'authorId'])->select('*')->where('slug', $slug)->first();
    }

    public function getAllCategory()
    {
        return Category::all();
    }
}