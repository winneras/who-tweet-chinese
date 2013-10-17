<?php

require_once('TwitterAPIExchange.php');

$twitterSettings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);
$dbSettings = array(
'host' => 'localhost',
 'port' => '8889',
 'user' => 'root',
 'pass' => 'root'
);

$con = mysql_connect("$dbSettings[host]:$dbSettings[port]", "$dbSettings[user]", "$dbSettings[pass]");

if (!$con) {
    die('Can not connect:' . mysql_errno());
}
?>