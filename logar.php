<?php
require_once "conecta.php";
$login = $_POST["nickname"];
$senha = $_POST["senha"];
$aux = 0;
session_start();

//$pdo = new PDO('mysql:host=localhost;dbname=jogatina', 'root', Null);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->query("SELECT * FROM usuario;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
     if(($login == $linha['nickname']) && ($senha == $linha['senha'])){
     	if($linha != ""){
     		$aux++;
     	}
     }
 }
     	if($aux > 0){
      		$_SESSION['logado']=true;
      		echo("<script>window.location.href='inicial.php';</script>");
     }
     elseif($aux == 0){
     	echo("<script>alert('Login ou senha são invalidos.');window.history.back();</script>");

     }  
?>