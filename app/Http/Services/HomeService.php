<?php


namespace App\Http\Services;


use App\Http\Repositories\HomeRepository;

class HomeService
{
    private $homeRepo;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepo = $homeRepository;
    }

    public function getListCategory()
    {
        return $this->homeRepo->getListCategory();
    }

    public function getListPost()
    {
        return $this->homeRepo->getListPosts();
    }
}