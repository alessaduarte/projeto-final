<?php

  $conn = mysqli_connect("localhost","root","");

  $db = mysqli_select_db($conn,"projeto");
/*
  if($conn){
      echo "Conexão estabelecida com sucesso";
  }else{
    echo "Erro na conexão com banco de dados.";
  }
*/
?>