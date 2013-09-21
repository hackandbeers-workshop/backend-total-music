<?php
namespace TotalMusic\Entity;

class Album extends Entity
{
    protected $description;
    protected $picture;
    protected $price;
    protected $url;

    public function getDescription(){ return $this->description; }
    public function getPicture(){ return $this->picture; }
    public function getPrice(){ return $this->price; }
    public function getUrl(){ return $this->url; }

    public function setDescription($description){ $this->description = $description; }
    public function setPicture($picture){ $this->picture = $picture; }
    public function setPrice($price){ $this->price = $price; }
    public function setUrl($url){ $this->url = $url; }
}