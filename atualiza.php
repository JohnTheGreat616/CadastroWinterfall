<?php
require_once "conecta.php";
$id = $_REQUEST["id"];
//echo("$id");
$consulta = $pdo->query("SELECT * FROM usuario WHERE id = $id");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	$email = "{$linha['email']}"; // resolvendo nome composto.
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
<form action="atualiza.php" method="post">
	<table>
		<tr>
			<td>
			<label class="cadastro_label">
			<span>Nickname</span>
			<input type="text" name="nickname" maxlength="35" class="input" value=<?php echo("'$nickname'"); ?>></td><td><img src="imgs/lupa.png" height="25" onclick="window.location.assign('busca.php?nickname='+nickname.value);">
			</label>
			<label class="cadastro_label">
			<span>E-mail</span>
			<input type="text" name="email" maxlength="30" class="input" value=<?php echo("{$linha['email']}"); ?>>
			</label>
			<label class="cadastro_label">
			<span>Senha</span>
			<input type="password" name="senha" maxlength="16" class="input" value=<?php echo("{$linha['senha']}"); ?>>
			</label>
	    	<p align="center"><input type="submit" name="btGravar" value="Cadastrar" class="button-css"></p>
						<script>const inputs = document.querySelectorAll('.input');
								const handleFocus = ({ target }) => {
									const span = target.previousElementSibling;
									span.classList.add('span_active');
								}
								const handleFocusOut = ({ target }) => {
									if(target.value == ''){
										const span = target.previousElementSibling;
										span.classList.add('span_active');
									}
								}
								inputs.forEach((input) => input.addEventListener('focus', handleFocus));
								inputs.forEach((input) => input.addEventListener('focusout', handleFocus));
						</script>
						<a href='index.php'>login</a>
					</td>
				</tr>
</table> 
</form>
</body>
</html>
<?php
}
?>