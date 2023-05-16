<?php  
require_once "conecta.php";
$nickname = $_GET["nickname"];
$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM usuario WHERE nome LIKE '%".$nome."%'");
echo "<table border=1>
<tr>
<td>ID</td>
<td>NICKNAME</td>
<td>EMAIL</td>
<td>SENHA</td>
</tr>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	if($cor == "#ffffff"){$cor = "#cccccc";}else{$cor = "#ffffff";}
	echo "<tr bgcolor=$cor>
	<td>{$linha['id']}</td>
	<td>{$linha['nickname']}</td>
	<td>{$linha['email']}</td>
	<td>{$linha['senha']}</td>
	</tr>";	
}
?>