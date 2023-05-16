<?php session_start(); 
if(isset($_SESSION['logado'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>𝖂𝖎𝖓𝖙𝖊𝖗𝖋𝖆𝖑𝖑</title>
</head>
<body>
<p><a href="kill.php">logout</a></p>
<h1>Em desenvolvimento...</h1>
</body>
</html>
<?php  
} else{
     echo ("<script>alert('É preciso logar para acessar essa página.');window.location.href='index.php';</script>");
}
?>