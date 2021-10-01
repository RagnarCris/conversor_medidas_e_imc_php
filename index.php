<!DOCTYPE html> 
<html lang="pt-br">
    <head>
        <title>Ciclo 01 Projeto Soft BD</title>
        <link rel="stylesheet" href="css/style.css"> 
        <meta charset="utf-8">
    </head>
    <body>
        <h1 class="titulo">Escolha a Aplicação:</h1>
        <div class="escolha">
            <form name="escolha" method="post" action="choice.php" class="form">
                <label for="aplicacao" style="margin-right: 10px;">Aplicação: </label>
                <select name='aplicacao' class="selecao">
                    <div style="margin-right: 10px;">
                        <option value='calculadora'>Calculadora de IMC</option>
                        <option value='conversor'>Conversor de medidas</option>
                    </div>
                    <input type="submit" name="escolha" value="Escolher" class="botao-simples">
                </select>
            </form>
        </div>
    </body>
</html>