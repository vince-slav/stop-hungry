<meta charset="utf-8">
<?php

require_once "conect.php"; // abre a conexao com banco

// recebendo valores nas variaveis

$login = $_POST['login'];
$senha = $_POST['senha'];

if (($login === "admin") && ($senha === "admin")){
    header ("location: index2.html");
} 

else

    header ("location: erro.html");

if ($conn->query($sql) === TRUE) {
	echo "Cadastrado com Sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();



?>
