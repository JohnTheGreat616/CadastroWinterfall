<?php
require_once "conecta.php";
$id = $_GET["id"];
$consulta = $pdo->query("SELECT * FROM usuario WHERE id = $id;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
$nickname  = $linha["nickname"];
$email = $linha["email"];
$senha = $linha["senha"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</title>
</head>
<body>
<h1>𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</h1>
<form action="atualizar.php" method="post">
	<table>
		<tr><input type="hidden" name="id" value=<?php echo("'$id'"); ?>>
			<td>Nickname:</td><td><input type="text" name="nickname" maxlength="35" value=<?php echo("'$nickname'"); ?>></td><td><img src="imgs/lupa.png" height="25" onclick="window.location.assign('busca.php?nickname='+nickname.value);"></td>
		</tr>
	    <tr>
	       <td>E-mail:</td><td colspan="2"><input type="text" name="email" maxlength="30" value=<?php echo("'$email'"); ?>></td>
	    </tr>
	    <tr>
	       <td>Senha:</td><td colspan="2"><input type="text" name="senha" maxlength="25" value=<?php echo("'$senha'"); ?>></td>
	    </tr>
	    <tr>
	       <td></td><td colspan="2"><input type="submit" name="bt" value="Gravar"></td>
        </tr>
</table> 
</form>
</body>
</html>
<?php 
}
?>