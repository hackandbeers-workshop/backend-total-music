<?php
namespace TotalMusic\Entity;

class Video extends Entity
{
    protected $description;
    protected $picture;
    protected $title;
    protected $url;

    public function getDescription(){ return $this->description; }
    public function getPicture(){ return $this->picture; }
    public function getTitle(){ return $this->title; }
    public function getUrl(){ return $this->url; }

    public function setDescription($description){ $this->description = $description; }
    public function setPicture($picture){ $this->picture = $picture; }
    public function setTitle($title){ $this->title = $title; }
    public function setUrl($url){ $this->url = $url; }
}