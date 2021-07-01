<?php
require_once "fruit.php";


$apple = new fruit();
$apple -> name = "яблока";
$apple -> color = "красное";
$apple -> volume = 4;
$apple -> age = 10;
echo "\nХосили себ ".$apple -> hosil();
echo "\nсок".$apple -> make_juice();

$apple -> doru_dodan('селитира');
echo "\nХосили себ баъд аз дору додан ".$apple->hosil();

$banana = new fruit();
$banana -> name="Банан";
$banana -> color="Желтый";
$banana -> volume = 2;
$banana -> age = 13;
