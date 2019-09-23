<?php

$url=curl_init("http://127.0.0.1:8080/edsa-iniciophp/teste1/cadastroa.php");

curl_setopt($url, CURLOPT_RETURNTRANSFER, true);

$dados = array(
	'nome' => "Paula",
	'email'=> "paula@gmail.com",
	'tel'=> "1165884758",
  );
curl_setopt($url, CURLOPT_POST, true);

curl_setopt($url, CURLOPT_POSTFIELDS, $dados);

curl_exec($url);

curl_close($url);



  ?>