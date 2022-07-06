<meta charset="utf-8" />
<?php

require_once "conect.php";

$nom = $_POST['nome'];
$val = $_POST['valor'];
$tip = $_POST['tipo'];

switch($_POST['tipo']){
    case "brasileira":
    $sql = "INSERT INTO brasileira VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
    break;
    case "eslava":
    $sql = "INSERT INTO eslava VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
    break;
    case "chinesa":
    $sql = "INSERT INTO chinesa VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
    break;
    case "churrascos":
    $sql = "INSERT INTO churrascos VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
    break;
    case "italiana":
    $sql = "INSERT INTO italiana VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);    
    break;
    case "lanches":
    $sql = "INSERT INTO lanches VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);      
    break;
    case "saudavel":
    $sql = "INSERT INTO saudavel VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
    break;
    case "pizza":
    $sql = "INSERT INTO pizza VALUES(NULL, '$nom','$val','$tip')";
    $res = mysqli_query($con,$sql);
}
print "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=index2.html'>";
mysqli_close($con);
?>



