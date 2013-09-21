<?php
namespace TotalMusic\Repository;

class AlbumRepository extends Repository
{
    protected $service;

    public function __construct()
    {
        $this->service = new \TotalMusic\Service\Itunes();
    }

    public function findBy($criteria, $value)
    {
        if ($criteria === 'name') {
            return $this->service->getAlbums($value);
        }
    }
}