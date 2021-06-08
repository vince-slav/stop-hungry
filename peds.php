<meta charset="utf-8"/>
<?php
require_once "conect.php";

$sql = "SELECT * FROM compra";
$res = mysqli_query($con,$sql);
?>
<table>
        <tr>
        <th>
        CLIENTE
        </th>
        <th>
        ENDEREÇO
        </th>
        <th>
        COD. PEDIDO
        </th>
        <th>
        DATA/ HORA. PEDIDO
        </th>
        </tr>
<?php
while($reg = mysqli_fetch_array($res)){
    
        echo "<tr>";
        echo "<td>";
        echo $reg['NOME'];
        echo "</td>";
        echo "<td>";
        echo $reg['ENDERECO'];
        echo "</td>";
        echo "<td>";
        echo $reg['IDCOMP'];
        echo "</td>";
        echo "<td>";
        echo $reg['data_hora'];
        echo "</td>";
        echo "</tr>";
}
?>

</table>

<?php
mysqli_close($con);
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css"/>
    
</head>
<body>
<div class="back">
        <a href="index2.html">
                <img src="images/voltv.png"/>
        </a>
</div>
</body>
