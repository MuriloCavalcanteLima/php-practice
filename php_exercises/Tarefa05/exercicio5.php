<?php 

session_start();
$_POST;


$palavra = $_POST['input'];

$palavrainvertida = strrev($palavra);

echo $palavrainvertida;


?>