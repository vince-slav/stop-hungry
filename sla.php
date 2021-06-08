<meta charset="utf-8"/>
<?php
require_once "conect.php";

$sql = "SELECT * FROM eslava";
$res = mysqli_query($con,$sql);
?>
<table>
        <tr>
        <th>
        PRATO
        </th>
        <th>
        PRECO
        </th>
        </tr>
<?php
while($reg = mysqli_fetch_array($res)){
    
        echo "<tr>";
        echo "<td>";
        echo utf8_encode($reg['prato']);
        echo "</td>";
        echo "<td>";
        echo $reg['preco'];
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
