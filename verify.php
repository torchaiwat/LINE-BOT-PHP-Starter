<?php
$access_token = 'aiw6YvuYW6U1v2qnY5EN276dKuyk9CcPvn5Ok7lGlwAijxO8cVPbu+QgzzNmN3FnoJTGS0g3gRZrADgC4hcNQ+O8pNkt7daEcW7LpDgYPg9/bUUX4MataWq5q3uQZMc4knPw21Nvhp1qcNnJbW1mXQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
