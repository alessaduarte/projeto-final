<?php

    require_once("../config.inc.php");

   $usuario = $_POST['usuario'];
   $senha = $_POST['senha'];

    if ($usuario != "admin" || $senha != "123"){
    echo"<script language='javascript' type='text/javascript'>
    alert('Usuário e/ou senha incorretos');window.location
    .href='login.php';</script>";
    }else{
        setcookie("usuario",$usuario);
        setcookie("senha",$senha);
        header("Location: index.php");
    }


?>