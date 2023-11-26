<?php

/** Make A Curl Request To Get Ip Address */
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.ipify.org?format=json");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

echo $result = curl_exec($curl);
curl_close($curl);

?>