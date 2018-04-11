<?php


namespace App\Http\Controllers;


    use Abraham\TwitterOAuth\TwitterOAuth;
    use Illuminate\Support\Facades\Cache;

class TwitterController extends Controller
{
    public function show()
    {
        //Cache data for 15 minutes
        $follower = Cache::remember('follower_twitter', 15, function() {
            $count = 0;
            $connection = new TwitterOAuth(
                config('social.twitter_consumer_key'),
                config('social.twitter_consumer_secret')
            );

            $content = $connection->get('users/show', ['screen_name' => config('social.twitter_id')]);
            if (is_object($content) && isset($content->followers_count)) {
                $count = (int) $content->followers_count;
            }

            return $count;
        });

        return $follower;
    }
}