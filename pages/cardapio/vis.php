<meta charset="utf-8" />
<?php
require_once "conect.php";

$sql = "SELECT * FROM brasileira";
$res = mysqli_query($con, $sql);
?>

<html>

<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stybr.css" />
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
        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>