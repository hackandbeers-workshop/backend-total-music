<?php
namespace TotalMusic\Service;

class LastFM
{
    protected $apiKey = '96152410ec0303408b492d85f09fc18e';
    protected $secret = 'c31677b7ec3d382ce357e5b60e0bf7de';
    protected $format = 'json';
    protected $apiUrl = 'http://ws.audioscrobbler.com/2.0/';
    protected $artistUrl = 'artist.getinfo';

    public function getArtistInfo($name)
    {
        $params = array();
        $params['method'] = $this->artistUrl;
        $params['artist'] = 'Cher';
        $params['api_key'] = $this->apiKey;
        $params['format'] = $this->format;

        $url = sprintf('%s?%s', $this->apiUrl, http_build_query($params));
        return json_decode(file_get_contents($url));
    }
}