<?php
namespace TotalMusic\Repository;

class ArtistRepository extends Repository
{
    protected $service;

    public function __construct()
    {
        $this->service = new \TotalMusic\Service\LastFm();
    }

    public function findBy($criteria, $value)
    {
        if ($criteria === 'name') {
            return $this->service->getArtistInfo($value);
        }
    }
}