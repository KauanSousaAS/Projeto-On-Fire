<?php

if(isset($_POST)){
    $primeiroNumero = str_split($_POST['num1']);
    for($i = 1;i <= (strlen($primeiroNumero)); $i++){
        
    }
    foreach(){
        
    }
    // if($_POST['num1']!=1&&$_POST['num1']!=2&&$_POST['num1']!=3&&$_POST['num1']!=4&&$_POST['num1']!=5&&$_POST['num1']!=6&&$_POST['num1']!=7&&$_POST['num1']!=8&&$_POST['num1']!=9)

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia 0</title>
</head>
<body>
    <h1>Calculadora xexelenta</h1><br>
    <form method="post">
        <input type="text" name="num1" id="num1">
        <select name="operacao" id="operacao">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">X</option>
            <option value="4">/</option>
        </select>
        <input type="text" name="num2" id="num2">
        <button type="submit">Calcular</button><br>
        <input type="text" name="resultado" id="resultado">
    </form>
</body>
</html>