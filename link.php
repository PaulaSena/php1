<?php

$url ="https://bi.vidaclass.com.br/utils";

$ch =curl_init($url);


 curl_exec($ch);

print_r(curl_exec(ch));exit;


curl_close($ch);


?>