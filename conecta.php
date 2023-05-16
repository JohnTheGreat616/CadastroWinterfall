<?php  
$pdo = new PDO('mysql:host=localhost;dbname=jogatina', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>