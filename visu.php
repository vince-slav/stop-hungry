
<?php

require_once "conect.php"; 

$crit = $_POST['prod'];



$sql = "SELECT * FROM produto";
$res = mysqli_query($con,$sql);
$pro = mysqli_fetch_assoc($res);
switch($crit)
{
    case "brasileira":
        header("location: bra.php");
    
    break;

    case "Brasileira":
        header("location: bra.php");
       
    break;

    case "BRASILEIRA":
        header("location: bra.php");
       
    break;
    
    case "saudavel":
        header("location: sau.php");
    break;

    case "Saudavel":
        header("location: sau.php");
    break;

    case "SAUDAVEL":
        header("location: sau.php");
    break;

    case "lanches":
        header("location: lan.php");
    break;

    case "Lanches":
        header("location: lan.php");
    break;

    case "LANCHES":
        header("location: lan.php");
    break;

    case "chinesa":
        header("location: chi.php");
    break;
    
    case "Chinesa":
        header("location: chi.php");
    break; 

    case "CHINESA":
        header("location: chi.php");
    break; 

    case "churrascos":
        header("location: chu.php");
    break;

    case "Churrascos":
        header("location: chu.php");
    break;

    case "CHURRASCOS":
        header("location: chu.php");
    break;

    case "eslava":
        header("location: sla.php");
    break;

    case "Eslava":
        header("location: sla.php");
    break;

    case "ESLAVA":
        header("location: sla.php");
    break;

    case "italiana":
        header("location: ita.php");
    break; 
    
    case "Italiana":
        header("location: ita.php");
    break; 

    case "ITALIANA":
        header("location: ita.php");
    break; 

    case "pizza":
        header("location: piz.php");
    break;  
    
    case "Pizza":
        header("location: piz.php");
    break;  

    case "PIZZA":
        header("location: piz.php");
    break;  

    default:
    header("location: login.html");
}
    
mysqli_close($con);

?>

<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

<br/>   
<a href="index.html"><center> <img width="100px" src="images/botv.png"/></center> </a>
<h3 class="volt">VOLTAR</h3>


