<?php
//criando um json
$json2 = array(
  "empresa" => "Nucleo Solucoes em Tecnologia",
  "site" => "www.nucleoti.com.br",
  "email" => "nucleo@nuceleoti.com.br",
  "watzap" => "(63) 99999 - 9999"
);

//print_r($json2);

echo json_encode($json2);

?>