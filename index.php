<?php
$err_msg = ''; 
echo "<br>Attempting message download for $file<br>"; 
$out = fopen("out.zip","wb");
    if ($out == FALSE){ 
      print "File not opened<br>"; 
      exit; 
    } 
    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_FILE, $out); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_URL,"https://www.seedr.cc/zip/75041751?st=0f4038df4104f48280ffa65d046b4e9e20fd4750cf4885d9dbfdb0dce193dd2e&e=1576614999"); 

    curl_exec($ch); 
    echo "<br>Error is : ".curl_error ( $ch); 

    curl_close($ch); 
?>