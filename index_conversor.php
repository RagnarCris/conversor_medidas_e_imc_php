<!DOCTYPE html> <html lang="pt-br">
<head>
    <title>Ciclo 01 Projeto Soft BD</title>
    <link rel="stylesheet" href="css/style.css"> 
    <meta charset="utf-8">
</head>
<body>
    <h1 class="titulo">Conversor de Medidas</h1>
    <div>
        <form action="conversor.php" method="post">
            <label for="medida">Medida</label>
            <select name='medida' class="select">
                <option value='1'>Comprimento</option>
                <option value='2'>Massa</option>
                <option value='3'>Temperatura</option>
            </select>
            
            <label for="medida">Unidade a ser convertida</label>
            <select name='unidades' class="select"> </select>
            
            <div class="hidden unidades-1">
                <option value='1'>Quilômetro</option>
                <option value='2'>Metro</option>
                <option value='3'>Centímetro</option>
            </div>
            <div class="hidden unidades-2">
                <option value='1'>Quilograma</option>
                <option value='2'>Grama</option>
            </div>
            <div class="hidden unidades-3"> 
                <option value='1'>Celsius</option>
                <option value='2'>Fahrenheit</option>
            </div>
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" placeholder="Insira o valor a ser convertido" class="input-text">
            
            <label for="valor">Unidade desejada</label>
            <select name='unidade-desejada' class="select"> </select>
            <div class="hidden unidade-desejada-1">
                <option value='1'>Quilômetro</option>
                <option value='2'>Metro</option>
                <option value='3'>Centímetro</option>
            </div>
            <div class="hidden unidade-desejada-2">
                <option value='1'>Quilograma</option>
                <option value='2'>Grama</option>
            </div>
            <div class="hidden unidade-desejada-3">
                <option value='1'>Celsius</option>
                <option value='2'>Fahrenheit</option>
            </div>
            <input type="submit" value="Converter" class="input-submit">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
<script>
    $(function(){
        $('.hidden').hide();
        $('select[name=unidades]').html($('div.unidades-1').html());
        $('select[name=medida]').change(function(){
            var id = $('select[name=medida]').val();
            $('select[name=unidades]').empty();
            $('select[name=unidades]').html($('div.unidades-' + id).html());
        });
        
        $('.hidden').hide();
        $('select[name=unidade-desejada]').html($('div.unidade-desejada-1').html());
        $('select[name=medida]').change(function(){
            var id = $('select[name=medida]').val();
            $('select[name=unidade-desejada]').empty();
            $('select[name=unidade-desejada]').html($('div.unidade-desejada-' + id).html());
        });
    });
</script>