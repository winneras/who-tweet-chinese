<?php

require_once('TwitterAPIExchange.php');

$twitterSettings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);
$dbSettings = array(
    'host' => '127.0.0.1',
    'port' => '8889',
    'user' => 'root',
    'pass' => 'root',
    'dbName' => 'ctwcount'
);

$con = mysql_connect("$dbSettings[host]:$dbSettings[port]", "$dbSettings[user]", "$dbSettings[pass]");

if (!$con) {
    die('Can not connect:' . mysql_errno());
}

$dbSelected = mysql_select_db("$dbSettings[dbName]", $con);
if (!$dbSelected) {
    echo 'test3';
    die("Can\'t use test_db : " . mysql_error());
}
mysql_query("SET NAMES 'utf8'");

/*$q = "INSERT INTO `zh_tw_info` (`UID`, `User_Screen_Name`, `User_Name`, `User_Location`, `User_Description`, `User_Followers`, `User_Friends`, `User_Created_At`, `User_Time_Zone`, `User_Language`, `User_Profile_Image`, `User_Profile_Image_Https`, `User_Appear_Counter`, `User_Last_Appear`) VALUES
(2567531, 'gslin', 'Gea-Suan Lin', 'Taipei, Taiwan', '??事是?步最大的原?力', 1624, 338, 'Tue Mar 27 22:25:29 +0000 2007', 'Taipei', 'en', 'http://a0.twimg.com/profile_images/378800000483574455/15c3e60288d463018de0214ffd20e36d_normal.jpeg', 'https://si0.twimg.com/profile_images/378800000483574455/15c3e60288d463018de0214ffd20e36d_normal.jpeg', 1, '2013-10-19 22:09:39'),
(6842422, 'Thruth', 'Thruth Wang', 'U.S.A', 'I have no money, no resources, no hopes. I am the happiest man alive.', 6767, 432, 'Fri Jun 15 21:32:38 +0000 2007', 'Beijing', 'en', 'http://a0.twimg.com/profile_images/1470925253/6wfvx_normal.jpeg', 'https://si0.twimg.com/profile_images/1470925253/6wfvx_normal.jpeg', 1, '2013-10-19 22:10:42')
ON DUPLICATE KEY UPDATE  User_Appear_Counter = User_Appear_Counter +1";
$r = mysql_query($q);
print_r($r);*/
?>