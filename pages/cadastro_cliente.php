<meta charset="utf-8">
<?php

require_once "conect.php"; // abre a conexao com banco

// recebendo valores nas variaveis

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == admin && $senha == admin){
    header ("location: index.html");
} 

else

echo "Acesso Inválido";

if ($conn->query($sql) === TRUE) {
	echo "Cadastrado com Sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>