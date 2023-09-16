<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


$tamanho = strlen($senha);

if($tamanho < 8){
    header("location: login.php?erro=1");
}else{
    header("location: gerenciamentousuario.php?usuario=" . $usuario . "&senha=" . $senha);

}

?>