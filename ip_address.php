<?php

$ip1 = $_SERVER['HTTP_CLIENT_IP'];
$ip2 = $_SERVER['HTTP_x_FORWARDED_FOR'];
$ip3= $_SERVER['REMOTE_ADDR'];
if(!empty($ip1))
{
 $ipaddresss = $ip1; 
}
else if(!empty($ip2))
{ $ipaddresss = $ip2;}
else{ $ipaddresss = $ip3;}
//print($ipaddress);

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$rem_port = $_SERVER['REMOTE_PORT'];
$rqst_method = $_SERVER['METHOD'];
$rem_host = $_SERVER['REMOTE_HOST'];
date_default_timezone_set('Asia/Kolkata');
$date = date("d:m:Y @ H:i:s  ");



$iplog = fopen('simple.txt','a');
fwrite($iplog,"IP : $ipaddresss | HOST : $rem_host | PORT : $rem_port | AGENT :$user_agent | DATE : $date | METHOD : $rqst_method."."\n" );

fclose($iplog);





?>
