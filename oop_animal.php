<?php
require_once "animal.php";

$dog = new animal('sag', 'siyoh', 2);
$cat = new animal();

print_r($dog);
print_r($cat);
