<?php
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, "https://thesieutoc.net/card_info.php");
// $resp = curl_exec($curl);//Trả về true hoặc false đồng thời echo
// curl_close($curl);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.google.com");
curl_exec($ch);
curl_close($ch);
?>