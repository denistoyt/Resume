<?php

define('TOKEN_FILE', $_SERVER['DOCUMENT_ROOT'].'/amocrm/token_info.json');
$token_info=json_decode(file_get_contents(TOKEN_FILE));
$subdomain = 'rosatmos';

$cache_time = 3600; 
$stop=$_GET['stop'];



if ((time() - $cache_time) < filemtime(TOKEN_FILE) and $stop==""){
	$access_token = $token_info->access_token;
} else {
	
	$link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token';
	$data = array(
	'client_id' => 'cbd13797-3138-42df-96f1-b8ba69946dbb',
	'client_secret' => 'Aqb6iwPraOk4I0XsmQCLQ3sPntPqP1v3290KQfTIe4nkwDlSKEim5Zwu9mMyfkYS',
	'redirect_uri' => 'https://rosatmos.su/amocrm/auth.php',
		'grant_type' => 'refresh_token',
		'refresh_token' => $token_info->refresh_token,
		
	);
	$curl = curl_init();curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0'); 
	curl_setopt($curl,CURLOPT_URL, $link); 
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type:application/json')); 
	curl_setopt($curl,CURLOPT_HEADER, false); 
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST'); 
	curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data)); 
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1); 
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
	$out = curl_exec($curl);
	$response = json_decode($out, true);
	

	$access_token = $response['access_token'];
	$refresh_token = $response['refresh_token']; 
	$token_type = $response['token_type'];
	$expires_in = $response['expires_in'];

	if ($refresh_token){
		file_put_contents("refresh_token.json", $refresh_token);
	}

	if ($access_token and $refresh_token){
		$data_amocrm = array('access_token' => $access_token,'expires' => $expires_in,'refresh_token' => $refresh_token);
		file_put_contents(TOKEN_FILE, json_encode($data_amocrm));
	}
}