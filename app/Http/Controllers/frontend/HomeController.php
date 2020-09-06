<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;
use App\Http\Services\HomeService;

class HomeController extends Controller
{
    private $homeSv;
    public function __construct(HomeService $homeService)
    {
        $this->homeSv = $homeService;
    }

    public function index(){
        $values = [];
        //$values['categories'] = $this->homeSv->getListCategory();
        $values['posts'] = $this->homeSv->getListPost();
        //dd($values);
        return view('frontend.index')->with($values);
    }
}