<?php
require_once "conecta.php";
$id    = $_POST["id"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$senha = $_POST["senha"];
try {
  $stmt = $pdo->prepare('UPDATE usuario SET nickname = :nickname, email = :email, senha = :senha WHERE id = :id');
  $stmt->execute(array(
    ':id'    => $id,
    ':nickname'  => $nickname,
    ':email'  => $email,
    ':senha' => $senha
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>