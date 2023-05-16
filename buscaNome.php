<?php
require_once "conecta.php";
$nome = $_GET["email"];
//echo "$nome";
$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM usuario WHERE email LIKE '%".$email."%'";);
echo "<table border=1>
        <tr>
          <td>ID</td>
          <td>NICKNAME</td>
          <td>EMAIL</td>
          <td></td>
          <td></td>
        </tr>
";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor=="#ffffff"){$cor = "#cccccc";}else{$cor="#ffffff";}
    echo "<tr bgcolor=$cor>
          <td>{$linha['id']}</td>
          <td>{$linha['nickname']}</td>
          <td>{$linha['email']}</td>
          <td><img src=img/edit.jpeg height=30></td>
        </tr>
    ";
}
?>