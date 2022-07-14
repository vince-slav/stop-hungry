<?php

session_start();

include './connection/conect.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$res = $conn->query("SELECT id, nome, email, senha, adm FROM users WHERE email='$email' AND senha='$senha'");

if($res->rowCount() == 1){
    $dataUser = $res->fetch(PDO::FETCH_ASSOC);
    $_SESSION['id'] = $dataUser['id'];
}else{
    header('location: error.php');
}


?>