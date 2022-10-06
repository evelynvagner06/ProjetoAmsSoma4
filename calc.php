<?php
    $pNumero = floatval ($_GET['txtPNumero']);
    $sNumero = floatval ($_GET['txtSNumero']);
    $soma = $sNumero + $pNumero;
    echo "Soma:<b>" . $soma . "</b>";

?>