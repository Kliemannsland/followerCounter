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
            $count = 0;
            $guzzle = new Client();

            $response = $guzzle->request('GET', 'https://www.instagram.com/' . config('social.instagram_id') . '/?__a=1');
            $content = $response->getBody()->getContents();

            if (empty($content)) {
                return $count;
            }

            $arr = json_decode($content, true);
            if (empty($arr)) {
                return $count;
            }

            if (empty($arr['graphql']['user']['edge_followed_by']['count'])) {
                return $count;
            }

            $followerCount = $arr['graphql']['user']['edge_followed_by']['count'];
            if (!is_numeric($followerCount)) {
                return $count;
            }

            return (int)$followerCount;
        });

        return $follower;
    }
}