<?php
if(isset($_COOKIE['usuario'])){
    $login = $_COOKIE['usuario'];
}
if(isset($_COOKIE['senha'])){
    $senha = $_COOKIE['senha'];
}
if(empty($usuario) OR empty($senha)){
        setcookie("usuario");
        setcookie("senha");
        echo "<center>Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a></center>";
        exit();
 }

?>