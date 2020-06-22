<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class InstagramController extends Controller
{
    public function show()
    {
        //Cache data for 15 minutes
        $follower = Cache::remember('follower_instagram', 15, function() {
            $guzzle = new Client();
            $response = $guzzle->request('GET', 'https://www.instagram.com/' . config('social.instagram_id') . '/?__a=1');
            $content = $response->getBody()->getContents();
            if(strlen($content) < 1) return 0;
            $arr = json_decode($content, true);
            if (empty($arr)) return 0;

            if (empty($arr['graphql']['user']['edge_followed_by']['count'])) return 0;
            return intval($arr['graphql']['user']['edge_followed_by']['count']);


            /*Just another workaround, if the json_api way above is broken
            $response = $guzzle->request('GET',
            'https://www.instagram.com/' .config('social.instagram_id')
            );

            $content = $response->getBody()->getContents();

            if (strlen($content) > 0) {
                preg_match('/edge_followed_by\":{\"count\":(\d*)/', $content, $matches);
                if(is_array($matches) && isset($matches[1])) return intval($matches[1]);
                return 0;
            }*/
        });

        return $follower;
    }
}