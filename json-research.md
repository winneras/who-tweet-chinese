User
  id name screen_name location(optional) created_at utc_offset time_zone lang profile_background_image_url profile_background_image_url_https
  
  
Tweet
  id lang coordinates(optional)
  user_id -> User.id


词语次数频度累积频度的69080
了26342
是20401
一19589
不15757
在13438
有12238
我11699
个10303
他10017
就9285
这9139
着8549
上7663
说7648
人7315
和7014
地6522
也6405
你6103
我们5279
到5268
大5202
里5195
来5160
都5038
还4824
把4636
去4323
又4322
看3900
要3857
很3431
能3400
十3320
小3281
那3264
得3150
她3118
好3104
年2990



curl --get 'https://api.twitter.com/1.1/search/tweets.json' --data 'count=1&lang=zh&q=%E7%9A%84+OR+%E4%BA%86+OR+%E6%98%AF+OR+%E4%B8%8D+OR+%E5%9C%A8+OR+%E6%9C%89+OR+%E6%88%91+OR+%E4%BB%96+OR+%E5%B0%B1+OR+%E4%B9%9F+OR+%E4%BD%A0+OR+%E5%88%B0+OR+%E6%9D%A5+OR+%E8%BF%98+OR+%E6%8A%8A+OR+%E5%8E%BB+OR+%E9%82%A3&result_type=recent' --header 'Authorization: OAuth oauth_consumer_key="cY0UcnKfIW8dxtgSjsq6Q", oauth_nonce="757bcb0aec780958b1c80fd75b584833", oauth_signature="yaisPtHQ7F42MPPaVeY2wbc5hZc%3D", oauth_signature_method="HMAC-SHA1", oauth_timestamp="1381833185", oauth_token="101053711-asAONJVYIY5CuirdYaklSw7iepOGc41TY39q2Yc3", oauth_version="1.0"' --verbose
