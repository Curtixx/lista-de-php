<?php

    $salario = $_GET['resposta'];
    $horas_extras = $_GET['valor_extra'];
    $numero_extra = $_GET['extra'];
    $extra = $horas_extras*$numero_extra;
    $novo_salario = $salario + $extra;
    $inss = $novo_salario*0.08;
    $salario_final = $novo_salario-$inss;
    echo "o salario liquido e de: $salario_final";

?>