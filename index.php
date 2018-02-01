<?php
/*
class app{
	
	public static function get($url,$func){
			
		call_user_func($func);
		
	}
	
	public static function post($url,$func){
		call_user_func($func);
	}
	
	public static function put($url,$func){
		call_user_func($func);
	}
	
	public static function delete($url,$func){
		call_user_func($func);
	}
	
}

app::get('/',function(){
	
	echo 'get';
	
});

app::get('/',function(){
	echo 'delete';
});

*/

header("content-type:text/html;charset=gbk2312"); 

//百度语音接口

require_once 'AipSpeech.php';

// 你的 APPID AK SK
const APP_ID = '10059657';
const API_KEY = 'qYZUGKUuhlafsVtCANtIu5LE';
const SECRET_KEY = 'TYhCDNuAFBljPRpFgZdE7mN6DNYO1OAP';

$client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);


/*$result = $client->asr(file_get_contents('./public/1947.wav'),'wav',16000,array(
       'lan' => 'zh',
));*/

$result = $client->synthesis('你好百度', 'zh', 1, array(
    'vol' => 5,
));

print_r($result);


































?>