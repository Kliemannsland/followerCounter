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
                'https://www.instagram.com/web/search/topsearch/', [
                    'query' => [
                        'query' => config('social.instagram_id')
                    ]
                ]);

            $content = $response->getBody()->getContents();

            if (strlen($content) > 0) {
                $arr = json_decode($content, true);
                if (isset($arr['users']) && !empty($arr['users'])) {
                    $users = $arr['users'];

                    foreach ($users AS $v) {
                        if (isset($v['user'])) {
                            $user = $v['user'];
                            if (isset($user['username']) && $user['username'] == config('social.instagram_id')) {
                                if (isset($user['follower_count'])) {
                                    $count = (int) $user['follower_count'];
                                    break;
                                }
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