
Consumindo API no PHP com cURL

<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$pokemons = json_decode(curl_exec($ch));
?>

<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 

$ch = curl_init($url);
print_r(curl_exec($ch));exit;

?>

-----

Consumindo API no PHP com file_get_contents


<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 

$ch = curl_init($url);
$pokemons = json_decode(curl_exec($ch));
?>
-------------------------------------
<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 

$pokemons = file_get_contents($url);

echo "<pre>";
print_r($pokemons);

?>
--------------------
<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 

$pokemons = file_get_contents($url);

echo "<pre>";
print_r(json_decode($pokemons));

?>
----------------------
<?php
$url = "https://www.canalti.com.br/api/pokemons.json"; 
$pokemons = json_decode(file_get_contents($url));
?>
----------------------







