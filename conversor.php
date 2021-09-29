<?php
    $medida = $_POST['medida'];
    $unidade_atual = $_POST['unidades'];
    $valor = $_POST['valor'];
    $unidade_desejada = $_POST['unidade-desejada'];
    switch($medida){
        case 1:
            $novo_valor = $valor;
            if ($unidade_atual == 1 && $unidade_desejada == 2 ){ // Quilomentro para metro
                $resultado = $novo_valor * 1000;
                $res = 'O Quilômetro foi convetido para metro e o valor é: ' . $resultado;
            } else if ($unidade_atual == 1 && $unidade_desejada == 3){ // Quilometro para centimetro
                $resultado = $novo_valor * 100000;
                $res = 'O Quilômetro foi convetido para centimetro e o valor é: ' . $resultado;
            } else if ($unidade_atual == 2 && $unidade_desejada == 1){ // Metro para Quilometro
                $resultado = $novo_valor / 1000;
                $res = 'O Metro foi convetido para quilômetro e o valor é: ' . $resultado;
            } else if ($unidade_atual == 2 && $unidade_desejada == 3){
                $resultado = $novo_valor * 100;
                $res = 'O Metro foi convetido para centímetro e o valor é: ' . $resultado;
            } else if ($unidade_atual == 3 && $unidade_desejada == 1) {
                $resultado = $novo_valor / 100000;
                $res = 'O Centímetro foi convetido para quilômetro e o valor é: ' . $resultado;
            } else if ($unidade_atual == 3 && $unidade_desejada == 2){
                $resultado = $novo_valor / 100;
                $res = 'O Centímetro foi convetido para metro e o valor é: ' . $resultado;
            }
        break;
        
        case 2:
            $novo_valor = $valor;
            if ($unidade_desejada == 1){
                $resultado = $novo_valor / 1000;
                $res = 'A Grama foi convertida para Quilograma e o valor é: ' .$resultado;
            } else {
                $resultado = $novo_valor * 1000;
                $res = 'O Quilograma foi convertido para Grama e o valor é: ' .$resultado;
            }
        break;
        
        case 3:
            $novo_valor = $valor;
            if ($unidade_desejada == 1){
                $resultado = (($novo_valor - 32) / 1.8);
                $res = 'O Fahrenheit foi convertido para Celsius e o valor é: ' .$resultado;
            } else {
                $resultado = (($novo_valor * 1.8) + 32);
                $res = 'O Celsius foi convertido para Fahrenheit e o valor é: ' .$resultado;
            }
        break;
        }
?>
<!DOCTYPE html>
<html lang="pt-br"> <head>
    <title>Ciclo 01 Projeto Soft BD</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
</head>
<body>
    <div>
        <h1 style="font-size: 35px; font-style: verdana; font-weight: bold;">
        <?php echo $res ?>
        </h1>
    </div>
</body>
</html>
