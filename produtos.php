<?php
$produtos = [
  ["nome"=>"Mouse Óptico","preco"=>59.90],
  ["nome"=>"Teclado Mecânico","preco"=>299.00],
  ["nome"=>"Headset USB","preco"=>149.50]
];
?><!doctype html>
<html lang="pt-br">
<head><meta charset="utf-8"><title>Produtos</title></head>
<body>
  <h1>Produtos</h1>
  <ul>
    <?php foreach ($produtos as $p): ?>
      <li><strong><?= htmlspecialchars($p['nome']) ?></strong> — R$ <?= number_format($p['preco'],2,',','.') ?></li>
    <?php endforeach; ?>
  </ul>
  <a href="/">voltar</a>
</body>
</html>
