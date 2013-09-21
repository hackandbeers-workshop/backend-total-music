<?php
namespace TotalMusic\Repository;

class VideoRepository extends Repository
{
    protected $service;

    public function __construct()
    {
        $this->service = new \TotalMusic\Service\YouTube();
    }

    public function findBy($criteria, $value)
    {
        if ($criteria === 'name') {
            return $this->service->getVideos($value);
        }
    }
}