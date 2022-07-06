<meta charset="utf-8"/>
<?php

require_once "conect.php"; 



$sql = "SELECT * FROM produto";
$res = mysqli_query($con,$sql);
$pro = mysqli_fetch_assoc($res);

while(@$pro = mysqli_fetch_assoc($res)){
    echo "<center>Produto: ".@$pro["nome"]." <br>Preço: ".@$pro["valor"].
    "<br>Descrição: ".@$pro['descricao']."<br> Setor: ".@$pro['setor']."<br/>".
    "<a href= delete.php?id=".$pro["id"].">Excluir</a>"."<br>"."".
    "<a href= atua.php?id=".$pro["id"].">Atualizar</a>"."<hr>";

}   

mysqli_close($con);

?>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
     
</head>
<body>
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
<center><h4>VOLTAR</h4></center>

