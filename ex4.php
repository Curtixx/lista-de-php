<?php
    $idade = $_GET['idade'];
    $dias = 0;
    $minutos = 0;
    $segundos =0;
    $dias = $idade*365;
    $minutos = $dias*24;
    $segundos = $minutos*60;
    echo "voce viveu $dias dias, $minutos minutos e $segundos segundos"; 