<?php
namespace TotalMusic\Service;

class YouTube
{
    protected $apiKey = 'AIzaSyDBpLfYd502eOy7nYj-mVLSbD_XkB0lbFI';
    protected $apiUrl = 'https://www.googleapis.com/youtube/v3/search';

    public function getVideos($query)
    {
        $params = array();
        $params['key'] = $this->apiKey;
        $params['q'] = $query;
        $params['part'] = 'snippet';
        $params['maxResults'] = 5;
        $params['type'] = 'video';

        $url = sprintf('%s?%s', $this->apiUrl, http_build_query($params));
        return json_decode(file_get_contents($url));
    }
}