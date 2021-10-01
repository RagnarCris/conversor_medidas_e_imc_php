<?php
    $medida = $_POST['medida'];
    $unidade_atual = $_POST['unidades'];
    $valor = $_POST['valor'];
    $unidade_desejada = $_POST['unidade-desejada'];
    switch($medida){
        case 1:
            $novo_valor = $valor;
            if ($unidade_atual == 1 && $unidade_desejada == 2 ){ // Quilômetro para metro
                $resultado = $novo_valor * 1000;
                $res = 'O valor em metro equivalente ao valor em quilômetro de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 1 && $unidade_desejada == 3){ // Quilômetro para centimetro
                $resultado = $novo_valor * 100000;
                $res = 'O valor em centímetro equivalente ao valor em quilômetro de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 2 && $unidade_desejada == 1){ // Metro para Quilômetro
                $resultado = $novo_valor / 1000;
                $res = 'O valor em quilômetro equivalente ao valor em metro de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 2 && $unidade_desejada == 3){ // Metro para Centímetro
                $resultado = $novo_valor * 100;
                $res = 'O valor em centímetro equivalente ao valor em metro de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 3 && $unidade_desejada == 1) { // Centímetro para Quilômetro
                $resultado = $novo_valor / 100000;
                $res = 'O valor em quilômetro equivalente ao valor em centímetro de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 3 && $unidade_desejada == 2){ // Centímetro para Metro
                $resultado = $novo_valor / 100;
                $res = 'O valor em metro equivalente ao valor em centímetro de '.$valor.' é : ' . $resultado;
            } else {
                $res = 'Você está tentando converter para a mesma unidade.';
            }
        break;
        
        case 2:
            $novo_valor = $valor;
            if ($unidade_atual == 2 && $unidade_desejada == 1){ // Grama para Quilograma
                $resultado = $novo_valor / 1000;
                $res = 'O valor em quilograma equivalente ao valor em grama de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 1 && $unidade_desejada == 2) { // Quilograma para Grama
                $resultado = $novo_valor * 1000;
                $res = 'O valor em grama equivalente ao valor em quilômetro de '.$valor.' é : ' . $resultado;
            } else {
                $res = 'Você está tentando converter para a mesma unidade.';
            }
        break;
        
        case 3:
            $novo_valor = $valor;
            if ($unidade_atual == 2 && $unidade_desejada == 1){ // Fahrenheit para Celsius
                $resultado = (($novo_valor - 32) / 1.8);
                $res = 'O valor em Celsius equivalente ao valor em Fahrenheit de '.$valor.' é : ' . $resultado;
            } else if ($unidade_atual == 1 && $unidade_desejada == 2){ // Celsius para Fahrenheit
                $resultado = (($novo_valor * 1.8) + 32);
                $res = 'O valor em Fahrenheit equivalente ao valor em Celsius de '.$valor.' é : ' . $resultado;
            } else {
                $res = 'Você está tentando converter para a mesma unidade.';
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
