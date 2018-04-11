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
            $response = $guzzle->request('GET',
                'https://api.instagram.com/' . config('social.instagram_id', 0), [
                    'query' => [
                        '__a' => 1,
                    ]
                ]);

            $content = $response->getBody()->getContents();
            if (strlen($content) > 0) {
                $arr = json_decode($content, true);
                if (isset($arr['graphql']) && !empty($arr['graphql'])) {
                    $graph = $arr['graphql'];

                    if (isset($graph['user']) && !empty($graph['user'])) {
                        $user = $graph['user'];

                        if (isset($user['edge_followed_by']) && !empty($user['edge_followed_by'])) {
                            if (isset($user['edge_followed_by']['count'])) {
                                $count = (int) $user['edge_followed_by']['count'];
                            }
                        }
                    }
                }
            }

            return $count;
        });

        return $follower;
    }
}