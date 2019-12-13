<?php
session_start();

$host = "localhost"; //localhost
$user = "ltran"; //root or //ltran
$password = "_M_ol6FN8_"; //"" or //_M_ol6FN8_
$bdd = "ltran"; //galeria_de_cauca or ltran

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8")
?>