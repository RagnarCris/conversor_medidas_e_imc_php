<?php
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $res = $altura*$altura;
    $calcular = $peso/$res;
    $resultado = number_format($calcular);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calcular IMC</title>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <h1 class="titulo">Calcular IMC</h1>
        <div class="calculadora">
            <br/>
            <?php
            if(isset($resultado) && $resultado != '0'){
                echo '<h2 class="texto-resultado "> Seu IMC é: '.$resultado.'</h2><br/>';
                if($resultado < 18.5){ 
                    echo '<p class="texto-resultado">Você está abaixo do seu peso ideal</p>'; 
                } else if ($resultado >= 18.5 and $resultado <= 24.9) { 
                    echo '<p class="texto-resultado">Muito bem! Você está no seu peso ideal</p>'; 
                } else if ($resultado >= 25.0 and $resultado <= 29.9) { 
                    echo '<p class="texto-resultado">Você está acima do seu peso ideal (Sobrepeso)</p>'; 
                } else if ($resultado >= 30.0 and $resultado <= 34.9) { 
                    echo '<p class="texto-resultado">Você está com obesidade nível I</p>'; 
                } else if ($resultado >= 35.0 and $resultado <= 39.9) { 
                    echo '<p class="texto-resultado">Você está com obesidade nível II</p>'; 
                } else if ($resultado >= 40.0) { 
                    echo '<p class="texto-resultado">Você está com obesidade nível III</p>'; 
                } 
            }else{
                echo '<h1>Por favor, insira somente números</h1>';
            } 
            ?>
            <br/>
            <h3 class="info-title"> Tabela de IMC: </h3>
            <p class="info">Abaixo de 18.5 - Abaixo do seu peso ideal</p>
            <p class="info">Entre 18.5 e 24.9 - Dentro do seu peso ideal</p>
            <p class="info">Entre 25.0 e 29.9 - Acima do seu peso ideal (Sobrepeso)</p>
            <p class="info">Entre 30.0 e 34.9 - Obesidade nível I</p>
            <p class="info">Entre 35.0 e 39.9 - Obesidade nível II</p>
            <p class="info" style="padding-bottom: 15px;">Acima de 40.0 - Obesidade nível III</p>
            
            <a href="index_imc.php" style="margin-top: 20px;" class="voltar">Refazer Calculo</a> 
        </div>
    </body>
</html> 
