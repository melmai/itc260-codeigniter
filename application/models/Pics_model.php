<?php
// application/models/Pics_model.php 

class Pics_model extends CI_Model 
{
    public function __construct()
    {
        $api_key = 'b722d5f18421ff913c8875622690f2a9';
        $tags = 'bears,polar';
        $perPage = 25;

    }

    public function get_pics($tags = '')
    {
        if ($tags !== '')
        {
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';

            $response = json_decode(file_get_contents($url));
            $pics = $response->photos->photo;

            return $pics;
        }
        else 
        {
            return 'Sorry, no search terms entered';
        }
    }
}