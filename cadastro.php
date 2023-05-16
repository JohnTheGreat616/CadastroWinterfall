<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</title>
	<style type="text/css">
		body{
			background-image: url(img/rpg.gif);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.fundo-tabela{
			background-color: rgba(0,0,0,0.7);
			color: #f5f5dc;
		}
		:root {
			--white: #FFF;
			--whitesmoke: #F9F9F9;
			--light-grey: #ECECEC;
			--grey: #C4C4C4;
			--medium-grey: #A7A7A7;
			--deep-grey: #343434;
			--black: #000000;
			--blue: #1B77F3;
			--red: #CF3C3F;
		}
		.cadastro {
			display: flex;
			flex-direction: column;
			align-items: center;
			min-height: 100vh;
			padding: clamp(35px, 8%, 70px);
		}
		.cadastro_label{
			background-color: ;
			display: block;
			margin-bottom: 20px;
			width: 100%;
		}
		.input {
			width: 95%;
			background-color: #ECECEC;
			border: none;
			border-radius: 5px;
			outline: none;
			font-size: 0.9em;
			padding: 20px 8px 8px;
			font-weight: 600;
			color: #343434;
		}
		.cadastro_label span {
			position: absolute;
			font-size: 0.8em;
			font-weight: 700;
			text-transform: uppercase;
			color: #A7A7A7;
			margin: 20px;
			cursor: text;
			transition: all 200ms ease;
		}
		.input:focus {
			background-color: #F9F9F9;
		}
		.cadastro_label .span_active {
			font-size: 0.7em;
			margin: 8px 10px;
		}
		.h1{
			color: #FFF
		}
		.button-css{
			background-color: #f5f5dc;
			border: none;
			color: black;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
	</style>
</head>
<body background="black">
	<main>
		<section class="cadastro" align="center">
	<form action="gravar.php" method="post">
		<center>
			<h1 class="h1">𝕭𝖊𝖒 𝖁𝖎𝖓𝖉𝖔 𝖆𝖔 𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</h1>
		</center>
			<table border="5px" align="center" class="fundo-tabela" width="500" height="100">
				<tr>
					<td>
						<p><h1>𝕮𝖆𝖉𝖆𝖘𝖙𝖗𝖔 𝖉𝖊 𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</h1></p>
					<label class="cadastro_label">
						<span>Nickname</span>
						<input type="text" name="nickname" maxlength="35" class="input">
					</label>
					<label class="cadastro_label">
						<span>E-mail</span>
						<input type="text" name="email" maxlength="35" class="input">
					</label>
					<label class="cadastro_label">
						<span>Senha</span>
						<input type="password" name="senha" maxlength="16" class="input">
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
</div>
</body>
</html>