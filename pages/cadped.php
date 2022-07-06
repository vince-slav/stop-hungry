<meta charset="utf-8" />

<?php

require_once "conect.php";

$nom = $_POST['nome'];
$tel = $_POST['tel'];
$cpf = $_POST['cpf'];
$end = $_POST['end'];
$comp = $_POST['compl'];
$pag = $_POST['pag'];
$dat = date('d/m/Y H:i:s');

$sql = "INSERT INTO compra VALUES(NULL,'$nom','$tel','$cpf','$end','$comp','$pag','$dat')";
$res = mysqli_query($con, $sql);
echo "<div id = 'palav'>";
echo "$nom, SEU PEDIDO CHEGARÁ EM BREVE";
echo "</div>";

mysqli_close($con);
?>

<html>

<head>

</head>

<body>
    <center>
        <div id="mot">
            <img src="images/moto.png" />
            <br>
        </div>


        <a href="menu.html" font-color="#00008B">VOLTAR</a>



        <div id="frang">
            <img src="images/frango.png" width="250" />
        </div>
    </center>
</body>