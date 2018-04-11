<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class YoutubeController extends Controller
{
    public function show()
    {
        //Cache data for 15 minutes
        $follower = Cache::remember('follower_youtube', 15, function() {
            $count = 0;
            $guzzle = new Client();
            $response = $guzzle->request('GET',
                'https://www.googleapis.com/youtube/v3/channels', [
                    'query' => [
                        'part' => 'statistics',
                        'id' => config('social.youtube_id'),
                        'key' => config('social.youtube_api_key'),
                    ],
                ]);

            $content = $response->getBody()->getContents();
            if (strlen($content) > 0) {
                $arr = json_decode($content, true);
                if (isset($arr['items']) && !empty($arr['items'])) {
                    $arr = array_pop($arr['items']);
                    if (isset($arr['statistics']['subscriberCount'])) {
                        $count = (int) $arr['statistics']['subscriberCount'];
                    }
                }
            }

            return $count;
        });

        return $follower;
    }
}