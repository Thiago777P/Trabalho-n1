<?php

$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$tamanho = strlen($senha);

if ($tamanho < 8) {
    header("location: cadastro.php?erro=1");

}else {
    header("location: login.php");
}


?>
