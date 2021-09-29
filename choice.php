<?php
$escolha = $_POST['aplicacao'];
if($escolha == 'calculadora'){
    header("Location: http://localhost/projeto_bd_ciclo_1/index_imc.php"); 
    exit();
}elseif($escolha == 'conversor'){
    header("Location: http://localhost/projeto_bd_ciclo_1/index_conversor.php"); 
    exit();
}else{
    echo 'Erro, tente novamente';
}
?>
