<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Prova</title>
</head>
<body>
<form  method="POST">
        <h1>Insira um valor abaixo</h1>
<input class="inputn" type="number" name="numero" id="numero">
<button name="botao" class="botao">Mostrar</button>

<?php
if(isset($_POST['numero'])){
   $numero = $_POST['numero'];
   if($numero < 0){
   $resposta = "O número digitado é negativo!";
   }else if($numero > 0){
   $resposta = "O número digitado é positivo!";
   }else{
$resposta = "O número digitado é igual a zero";
   }
   
   echo "<p>$resposta</p>";

    }

?>

</form>
</body>
</html>