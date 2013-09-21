<?php

require_once 'autoload.php';

$artist = new TotalMusic\Repository\ArtistRepository();
print_r($artist->findBy('name', 'Bon Jovi'));

$videos = new TotalMusic\Repository\VideoRepository();
print_r($videos->findBy('name', 'Bon Jovi'));

$albums = new TotalMusic\Repository\AlbumRepository();
print_r($albums->findBy('name', 'Bon Jovi'));