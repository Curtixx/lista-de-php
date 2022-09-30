<?php
    $resp = $_GET['km'];
    $resp2 = $_GET['combustivel'];
    $resultado = $resp/$resp2;
    echo "a media de combustivel gasto e de: $resultado litros";
?>