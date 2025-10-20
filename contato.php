<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome  = trim($_POST["nome"] ?? "");
  $email = trim($_POST["email"] ?? "");
  if ($nome === "" || $email === "") {
    $msg = "<p style='color:red'>Preencha nome e e-mail.</p>";
  } else {
    $msg = "<p style='color:green'>Recebido, ".htmlspecialchars($nome)." (".htmlspecialchars($email).").</p>";
  }
}
?><!doctype html>
<html lang="pt-br">
<head><meta charset="utf-8"><title>Contato</title></head>
<body>
  <h1>Contato</h1>
  <?= $msg ?>
  <form method="post">
    <label>Nome: <input name="nome" value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"></label><br>
    <button type="submit">Enviar</button>
  </form>
  <a href="/">voltar</a>
</body>
</html>
