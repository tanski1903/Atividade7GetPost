<?php
$valor = $_POST['vl'];
$taxa = $_POST['tx'];
$tempo = $_POST['tp'];

$prestacao = $valor + ($valor*($taxa/100)*$tempo);

echo "Valor da Prestação: $prestacao"
?>