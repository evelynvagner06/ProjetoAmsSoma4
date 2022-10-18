<?php
    $PNumero = floatval ($_GET['txtPNumero']);
    $SNumero = floatval ($_GET['txtSNumero']);
    $Soma = $SNumero + $PNumero;
    echo "Soma:<b>" . $Soma . "</b>";

?>
