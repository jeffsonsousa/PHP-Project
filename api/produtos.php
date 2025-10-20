<?php
header('Content-Type: application/json; charset=utf-8');
$produtos = [
  ["id"=>1,"nome"=>"Mouse Óptico","preco"=>59.90],
  ["id"=>2,"nome"=>"Teclado Mecânico","preco"=>299.00],
  ["id"=>3,"nome"=>"Headset USB","preco"=>149.50]
];
echo json_encode($produtos, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
