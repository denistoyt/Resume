<?php
/*$name = $_POST['name'];
$phone=$_POST['phone'];
$price=$_POST['price'];
$comment1=$_POST['comment'];
$comment=$price."\r\n";
if ($comment1){$comment.="Комментарий: ".$comment1;}
*/

$brand=$_POST['brand'];

$name = $_POST['name'];
$phone=$_POST['phone'];
$price=$_POST['price'];
$comment1=$_POST['comment'];
/*$comment=$price."\r\n";
if ($comment1){$comment.="Комментарий: ".$comment1;}
if ($brand){$comment.="Брэнд: ".implode(", ",$brand);}
*/

$comment='';
//if ($utm_term){$comment.="Бренд / направление: ".implode(", ",$brand);}
if ($price){$comment.="Бренд / направление: ".$price."\r\n";}
if ($brand){$comment.="Бренд / направление: ".implode(", ",$brand)."\r\n";}

if ($comment1){$comment.="Комментарий: ".$comment1."\r\n";}
if ($utm_term){$comment.="Поисковой запрос: ".$utm_term."\r\n";}






include($_SERVER['DOCUMENT_ROOT']."/amocrm/auth.php");
$headers = array('Authorization: Bearer ' . $access_token,"Content-Type: application/json");
/*---------------------------------------------------*/


$summ=0;
$responsible_user_id=6101938;

$sdelka=array(
    'name'=>'Заявка с rosatmos.su/azot',
    'status_id'=>140,
    'price'=>$summ,
	'responsible_user_id'=>$responsible_user_id,
	'tags'=>"Форма Rosatmos.su/azot"
);

//$expectMarks = array('utm_source','utm_medium','utm_campaign','utm_term','utm_content');$utms=array();foreach($expectMarks as $utm){if(isset($_COOKIE[$utm])){${$utm}=$_COOKIE[$utm];}}
if ($utm_source){$sdelka['custom_fields'][]=array('id'=>739337,'values'=>array(array('value'=>$utm_source)));}
if ($utm_medium){$sdelka['custom_fields'][]=array('id'=>739339,'values'=>array(array('value'=>$utm_medium)));}
if ($utm_campaign){$sdelka['custom_fields'][]=array('id'=>739341,'values'=>array(array('value'=>$utm_campaign)));}
if ($utm_term){$sdelka['custom_fields'][]=array('id'=>739343,'values'=>array(array('value'=>$utm_term)));}
if ($utm_content){$sdelka['custom_fields'][]=array('id'=>739345,'values'=>array(array('value'=>$utm_content)));}


$roistat=$_COOKIE['roistat_visit'];
if ($roistat){$sdelka['custom_fields'][]=array('id'=>399181,'values'=>array(array('value'=>$roistat)));}
if ($roistat){$sdelka['custom_fields'][]=array('id'=>739353,'values'=>array(array('value'=>$roistat)));}


$leads['request']['leads']['add'][]=$sdelka;
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
$curl=curl_init();curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');curl_setopt($curl,CURLOPT_URL,$link);curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));curl_setopt($curl,CURLOPT_HEADER,false);

curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);

curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);$out=curl_exec($curl);$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);

if ($code==200){
	$Response=json_decode($out,true);
	$Response=$Response['response']['leads']['add'];
	$idsdelka=$Response[0]['id'];
	
	if ($name==''){$name=$phone;}

	$contact=array(
	  'name'=>$name,
	  'linked_leads_id'=>array($idsdelka),
	  'responsible_user_id'=>$responsible_user_id
	);

	if ($phone){$contact['custom_fields'][]=array('id'=>201643,'values'=>array(array('value'=>$phone,'enum'=>'MOB')));}
	//if ($email){$contact['custom_fields'][]=array('id'=>201645,'values'=>array(array('value'=>$email,'enum'=>'WORK')));}

			
	$set['request']['contacts']['add'][]=$contact;

	
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
	$curl=curl_init();curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');curl_setopt($curl,CURLOPT_URL,$link);curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($set));curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));curl_setopt($curl,CURLOPT_HEADER,false);
	
	
	curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
	
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	$out=curl_exec($curl);
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);

	
	if ($comment){
		$notes['request']['notes']['add']=array(
		array(
			'element_id'=>$idsdelka,
			'element_type'=>2,
			'note_type'=>4,
			'text'=>$comment,
			'responsible_user_id'=>$responsible_user_id,
		));
		$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/notes/set';
		$curl=curl_init();curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');curl_setopt($curl,CURLOPT_URL,$link);curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($notes));curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));curl_setopt($curl,CURLOPT_HEADER,false);
		
		//curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt');curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt');
		curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
		
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);$out4=curl_exec($curl);$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);curl_close($curl);
	}
	
}
?>