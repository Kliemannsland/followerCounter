<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class InstagramController extends Controller
{
    public function show()
    {
        //Cache data for 15 minutes
        Cache::forget('follower_instagram');
        $follower = Cache::remember('follower_instagram', 15, function() {
            $count = 0;
            $guzzle = new Client();

            $response = $guzzle->request('GET',
                'https://www.instagram.com/' .config('social.instagram_id')
            );

            $content = $response->getBody()->getContents();

            if (strlen($content) > 0) {
                preg_match('/edge_followed_by\":{\"count\":(\d*)/', $content, $matches);
                if(is_array($matches) && isset($matches[1])) {
                    return intval($matches[1]);
                }
            }

            return $count;
        });

        return $follower;
    }
}