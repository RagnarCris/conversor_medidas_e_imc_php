<!DOCTYPE html> 
<html lang="pt-br">
    <head>
        <title>Ciclo 01 Projeto Soft BD</title>
        <link rel="stylesheet" href="css/style.css"> 
        <meta charset="utf-8">
    </head>
    <body>
        <h1 class="titulo">Calculadora de IMC</h1>
        <div class="calculadora">
            <form name="calcular" method="get" enctype="multipart/form-data" action="imc.php" class="form">
                <fieldset class="calc">
                    <label>
                        <br/>
                        <span class="span">Digite seu peso em quilos (ex: 60):</span>
                        <br/>
                        <input type="text" name="peso" class="pesoealtura" />
                    </label>
                    <br />
                    <label>
                        <span class="span">Digite sua altura em metros (ex: 1.70):</span>
                        <br/>
                        <input type="text" name="altura" class="pesoealtura"/>
                    </label>
                    <input type="submit" value="Calcular IMC" class="botao">
                </fieldset>
            </form>
        </div>
    </body>
</html>