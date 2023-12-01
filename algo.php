<?php
include 'index.php';
$forma = htmlspecialchars($_REQUEST['forma']);
$unidadeMedida = htmlspecialchars($_REQUEST['unidadeMedida']);
$certo = 'tá certo';
$errado = 'Selecione uma forma geométrica para prosseguir';

/*if ($forma != "selecione") {
    echo $certo;
} else
    echo $errado;
*/