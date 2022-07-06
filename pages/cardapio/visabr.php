<meta charset="utf-8"/>


<html>
<body backgroun= "blue">    













<?php

require_once "conect.php";

//VARIÁVEL QUE VAI RECEBER A INSTRUÇÃO DO SQL "SELECT"
$sql = "SELECT * FROM brasileira";

//VARIÁVEL QUE VAI GUARDAR O RESULTADO DA INSTRUÇÃO DO SQL
$res = mysqli_query($con,$sql);


while($reg = mysqli_fetch_array($res)){
    echo "PRATO: ".$reg['prato']."<br/>";
}










mysqli_close($con);


?>










