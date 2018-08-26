<?php


$sqlite = "sqlite:vacnit.sdb";


$pdo = new PDO($sqlite);

$execucao = $pdo->query("select * from Cidadao");


while ($row = $execucao->fetch()) {

    $idCidadao = $row['idCidadao'];
    $nome = $row['nome'];
    $cartaoSUS = $row['cartaoSUS'];

    echo $idCidadao . " - ", $nome . " - ", $cartaoSUS . "<br>"; }?>
