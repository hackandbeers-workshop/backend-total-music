<?php
namespace TotalMusic\Entity;

class Artist extends Entity
{
    protected $albums;
    protected $biography;
    protected $picture;
    protected $videos;

    public function getAlbums(){ return $this->albums; }
    public function getBiography(){ return $this->biography; }
    public function getPicture(){ return $this->picture; }
    public function getVideos(){ return $this->videos; }

    public function setAlbums(array $albums){ $this->albums = $albums; }
    public function setBiography($biography){ $this->biography = $biography; }
    public function setPicture($picture){ $this->picture = $picture; }
    public function setVideos(array $videos){ $this->videos = $videos; s}
}