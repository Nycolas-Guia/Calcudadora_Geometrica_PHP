<?php
    include 'index.php';
    $forma = htmlspecialchars($_REQUEST['forma']);
    $unidadeMedida = htmlspecialchars($_REQUEST['unidadeMedida']);
    $certo = 'tá certo';
    $errado = 'Selecione uma forma geométrica';
    if (isset($_POST["res"])){
        $certo = "si";
        $errado = "no";
    }
    if ($_GET["forma"] != "selecione") {
            echo $certo;
        }else
        echo $errado;
    
?>