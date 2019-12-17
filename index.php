<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://www.seedr.cc/zip/75041751?st=0f4038df4104f48280ffa65d046b4e9e20fd4750cf4885d9dbfdb0dce193dd2e&e=1576614999");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
$out = curl_exec($ch);
echo $out;
// close cURL resource, and free up system resources
curl_close($ch);


$fp = fopen('data.zip', 'w');
fwrite($fp, $out);
fclose($fp);

?>