<meta charset="utf-8">
<?php

require_once "conect.php"; // abre a conexao com banco

// recebendo valores nas variaveis

$email = $_POST['login'];
$senha = $_POST['senha'];


$res = $conn->query("SELECT * FROM clientes WHERE email='$email' AND senha='$senha'");

if($res->rowCount() == 1){

}else{

}

?>