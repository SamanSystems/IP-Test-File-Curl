<?php
$ch = curl_init('http://www.zarinpal.com/labs/TestIP');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
?>