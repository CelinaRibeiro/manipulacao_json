<?php
$json = file_get_contents("https://api.hgbrasil.com/weather?woeid=457721/");
$json = json_decode($json);

//print_r($json);

echo "Hoje : ".$json->results->date.", em ".$json->results->city."<br/>";
echo $json->results->description."<br/>";
echo "Temperatura: ".$json->results->temp." graus"."<br/>";
echo "Umidade: ".$json->results->humidity." %";

?>
