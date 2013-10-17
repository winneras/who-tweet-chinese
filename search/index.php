<?php

require_once('config.php');

$url = 'https://api.twitter.com/1.1/search/tweets.json';
//$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';

$getfield = '?count=3&lang=zh&q=%E7%9A%84+OR+%E4%BA%86+OR+%E6%98%AF+OR+%E4%B8%8D+OR+%E5%9C%A8+OR+%E6%9C%89+OR+%E6%88%91+OR+%E4%BB%96+OR+%E5%B0%B1+OR+%E4%B9%9F+OR+%E4%BD%A0+OR+%E5%88%B0+OR+%E6%9D%A5+OR+%E8%BF%98+OR+%E6%8A%8A+OR+%E5%8E%BB+OR+%E9%82%A3&result_type=recent';

$twitter = new TwitterAPIExchange($twitterSettings);
$response = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
$res_array = json_decode($response);
//var_dump($res_array);
$counter = 1;

foreach ($res_array -> statuses as $tweet) {
    echo 'Tweet No.'.$counter;
    $counter++;
    echo '<br>';
    echo 'Tweet at '.$tweet -> created_at;
    echo '<br>';
    echo 'Tweet ID '.$tweet -> id;
    echo '<br>';
    echo 'Tweet text: '. $tweet -> text;
    echo '<br>';
    echo 'Tweet source: '. $tweet -> source;
    echo '<br>';
    echo 'Reply to tweet ID: '. $tweet -> in_reply_to_status_id;
    echo '<br>';
    echo 'Reply to user ID: '. $tweet -> in_reply_to_user_id;
    echo '<br>';
    echo 'Reply to user screen name: '.$tweet -> in_reply_to_screen_name;
    echo '<br>';
    echo 'Language: '. $tweet -> lang;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'User ID:'. $tweet -> user -> id;
    echo '<br>';
    echo 'User name: ' . $tweet -> user -> name;
    echo '<br>';
    echo 'User screen name: ' . $tweet -> user -> screen_name;
    echo '<br>';
    echo 'User Location: ' . $tweet -> user -> location;
    echo '<br>';
    echo 'User description: ' . $tweet -> user -> description;
    echo '<br>';
    echo 'User followers count: '. $tweet -> user -> followers_count;
    echo '<br>';
    echo 'User friends count: '. $tweet -> user -> friends_count;
    echo '<br>';
    echo 'User created at '. $tweet -> user -> created_at;
    echo '<br>';
    echo 'User time zone: '. $tweet -> user -> time_zone;
    echo '<br>';
    echo 'User language: ' . $tweet -> user -> lang;
    echo '<br>';
    echo 'User profile image: ' . $tweet -> user -> profile_image_url;
    echo '<br>';
    echo 'User profile image https:' . $tweet -> user -> profile_image_url_https;
    echo '<br>';
    
    
    //var_dump($tweet);
    echo '<br>';
    echo '-------------------------------------';
    echo '<br>';
}
?>