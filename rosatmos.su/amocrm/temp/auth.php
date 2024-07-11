<?php

$subdomain = 'rosatmos';
$link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token';
$data = array(
	'client_id' => 'cbd13797-3138-42df-96f1-b8ba69946dbb',
	'client_secret' => 'Aqb6iwPraOk4I0XsmQCLQ3sPntPqP1v3290KQfTIe4nkwDlSKEim5Zwu9mMyfkYS',
	'redirect_uri' => 'https://rosatmos.su/amocrm/auth.php',
	'grant_type' => 'authorization_code',
	'code' => 'def50200b3d88dde53ec181b50c82a76a628293acd07b98ec7c358cd8043dbbdc43cede47518797c190918f18b84e83e977beb4efbdee550be36691919e73e629ed65226c5f83b596b4b744f093f25a651d7afce44d6288aa21c1625672d474a4cf46b26ed03775d83092b700b969315b1743cd3a729a82115ac02e6c8be2f56a646f4649728e031f4185629386b94b0d00dd8980fb6f8b1af340ddd8b4b8fc384e3b9f3485b99897eec1731465221229367d32e669d75d368c3daf93ce4c475d8db634a5156d38606ba3a8950a634da831a3782df707775ef2f5bec445a0f97e51c37607e97ec7e3ec8cb10dce3e3fda7058dbdc630b2326db7f996f7b7563d7ffd5c36fba69feb94112aa0673195b272c0c01407ddfdf33e0fc9cb1902502feeb7dcc1e98bdd78ae62f10991d9477abc2ef87b4879056e14ca27f62fbab300be11b724f71b01cbaa37bb1a50be86f8d36d6a9882e8e56578bcb0ac0e5205572e77a549118d8cade4d248b044e03e5efe4380288ce10e8bf6283b5990b5fcc6ba417d294c63669f3750b2e8136e6f02077de28f80fb3ccc2d1dee24666efe20451e44f3bb8cca108d631f2b8d69072c837305c11b9a407812f35e0936377a9b22b803d30db72ba11e03bc86c9d8cd',
	
);
$curl = curl_init();curl_setopt($curl,CURLOPT_RETURNTRANSFER, true); curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0'); curl_setopt($curl,CURLOPT_URL, $link); curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']); curl_setopt($curl,CURLOPT_HEADER, false); curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST'); curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data)); curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1); curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl);
$response = json_decode($out, true);

$access_token = $response['access_token']; //Access токен
$refresh_token = $response['refresh_token']; //Refresh токен
$token_type = $response['token_type']; //Тип токена
$expires_in = $response['expires_in']; //Через сколько действие токена истекает

define('TOKEN_FILE', 'token_info0.json');
$data = array('accessToken' => $access_token,'expires' => $expires_in,'refresh_token' => $refresh_token);
file_put_contents(TOKEN_FILE, json_encode($data));