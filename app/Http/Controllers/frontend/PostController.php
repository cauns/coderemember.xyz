<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;
use App\Http\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postSv;
    public function __construct(PostService $postService)
    {
        $this->postSv = $postService;
    }

    public function index(Request $request){
        $values = $this->postSv->getDataIndex($request);
        //dd($values);
        return view('frontend.post')->with($values);
    }
}