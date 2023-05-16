<?php  
require_once "conecta.php";
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$senha = $_POST["senha"];
echo("$nickname, $email, $senha");

try{
	$stmt = $pdo->prepare('INSERT INTO usuario VALUES(:id, :nickname, :email, :senha)');
	$stmt->execute(array(
		':id' => Null,
		':nickname' => $nickname,
		':email' => $email,
		':senha' => $senha 
	));
	echo("<script>alert('Dados registrados...'); window.location.href='index.php';</script>");
}catch(PDOException $e) {
	echo 'Error: ' . $e->getMassege();
}
?>