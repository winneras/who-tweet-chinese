<?php
$oauth_access_token = "101053711-asAONJVYIY5CuirdYaklSw7iepOGc41TY39q2Yc3";
$oauth_access_token_secret = "PezpChTnqIGcBOtKCrs4aEDa0mBhot4WGFwiZ2dDwOQ";
$consumer_key = "cY0UcnKfIW8dxtgSjsq6Q";
$consumer_secret = "UXcIPAZjUt1Za8kVqlA8qLS61AbNmtOoNEiRHkQvO0";


$oauth_hash = '';
$oauth_hash .= 'oauth_consumer_key='.$consumer_key.'&';
$oauth_hash .= 'oauth_nonce=' . time() . '&';
$oauth_hash .= 'oauth_signature_method=HMAC-SHA1&';
$oauth_hash .= 'oauth_timestamp=' . time() . '&';
$oauth_hash .= 'oauth_token='.$oauth_access_token.'&';
$oauth_hash .= 'oauth_version=1.0';

$base = '';
$base .= 'GET';
$base .= '&';
$base .= rawurlencode('https://api.twitter.com/1.1/statuses/user_timeline.json');
$base .= '&';
$base .= rawurlencode($oauth_hash);
//$base .= '&';
//$base .= 'q=%E7%9A%84+OR+%E4%BA%86+OR+%E6%98%AF+OR+%E4%B8%8D+OR+%E5%9C%A8+OR+%E6%9C%89+OR+%E6%88%91+OR+%E4%BB%96+OR+%E5%B0%B1+OR+%E4%B9%9F+OR+%E4%BD%A0+OR+%E5%88%B0+OR+%E6%9D%A5+OR+%E8%BF%98+OR+%E6%8A%8A+OR+%E5%8E%BB+OR+%E9%82%A3&result_type=recent';
echo $base;
echo '<br>';

$key = '';
$key .= rawurlencode($consumer_secret);
$key .= '&';
$key .= rawurlencode($oauth_access_token_secret);
$signature = base64_encode(hash_hmac('sha1', $base, $key, true));
$signature = rawurlencode($signature);


$oauth_header = '';
$oauth_header .= 'oauth_consumer_key="'.$consumer_key.'", ';
$oauth_header .= 'oauth_nonce="' . time() . '", ';
$oauth_header .= 'oauth_signature="' . $signature . '", ';
$oauth_header .= 'oauth_signature_method="HMAC-SHA1", ';
$oauth_header .= 'oauth_timestamp="' . time() . '", ';
$oauth_header .= 'oauth_token="'.$oauth_access_token.'", ';
$oauth_header .= 'oauth_version="1.0", ';
$curl_header = array("Authorization: Oauth {$oauth_header}", 'Expect:');

$curl_request = curl_init();
curl_setopt($curl_request, CURLOPT_HTTPHEADER, $curl_header);
curl_setopt($curl_request, CURLOPT_HEADER, false);
curl_setopt($curl_request, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/user_timeline.json');
curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);
$json = curl_exec($curl_request);
curl_close($curl_request);

print_r($json);
?>
