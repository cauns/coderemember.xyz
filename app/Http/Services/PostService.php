<?php


namespace App\Http\Services;


use App\Http\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostService
{
    private $postRepo;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepo = $postRepository;
    }

    public function getPostBySlug($slug)
    {
        return $this->postRepo->getPostBySlug($slug);
    }

    public function getDataIndex(Request $request)
    {
        $result = [];

        $post = $this->postRepo->getPostBySlug($request->route('slug'));
        $result['post'] = $post;
        if ($post) {
            $relatedPost = $this->postRepo->getReleatedPosts($post->category_id,$post->id);
            $result['reletedPost'] = $relatedPost;
        }

        $categories = $this->postRepo->getAllCategory();
        $result['categories'] = $categories;

        return $result;
    }

}