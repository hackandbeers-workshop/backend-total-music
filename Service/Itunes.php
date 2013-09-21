<?php
namespace TotalMusic\Service;

class Itunes
{
    protected $apiUrl = 'https://itunes.apple.com/search?';

    public function getAlbums($query)
    {
        $params = array();
        $params['entity'] = 'album';
        $params['media'] = 'music';
        $params['term'] = $query;
        $params['limit'] = 5;

        $url = sprintf('%s?%s', $this->apiUrl, http_build_query($params));
        return json_decode(file_get_contents($url));
    }
}