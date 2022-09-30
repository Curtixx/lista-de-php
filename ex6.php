<?php
    $latas = $_GET['latas'];
    $garrafa = $_GET['garrafas'];
    $garrafa_2l = $_GET['garrafas_2L'];
    $latas = $latas *0.35;
    $garrafa = $garrafa*0.60;
    $garrafa_2l = $garrafa_2l*1;
    $total = $latas+$garrafa+$garrafa_2l;
    echo "voce comprou $total litros ";

?>