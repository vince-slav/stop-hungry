<meta charset="utf-8" />
<?php
require_once "conect.php";

$sql = "SELECT * FROM italiana";
$res = mysqli_query($con, $sql);
?>

<html>

<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stytab.css" />
</head>

<body>
        <div class="container-fluid">
                <div class="col-md-6">
                        <div class="row">
                                <table class="table table-bordered table-dark">
                                        <tr>
                                                <th>Prato</th>
                                                <th>Preço</th>
                                                <th>Comprar</th>
                                        </tr>
                                        <?php
                                        while ($reg = mysqli_fetch_array($res)) {

                                                echo "<tr>";
                                                echo "<td>";
                                                echo utf8_encode($reg['prato']);
                                                echo "</td>";
                                                echo "<td>";
                                                echo $reg['preco'];
                                                echo "</td>";
                                                echo "<td>";
                                                echo "<a href = cadastro.html> <img src = 'images/carro.png' width = 30> </a>";
                                                echo "</td>";
                                                echo "</tr>";
                                        }
                                        ?>
                                </table>
                                <?php
                                mysqli_close($con);
                                ?>
                        </div>
                </div>

        </div>

</body>