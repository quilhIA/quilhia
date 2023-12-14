<?php
 $servidor = 'localhost';
 $banco = 'id21671076_quilhathewave';
 $usuario = 'id21671076_quilha';
 $senha = 'Qu1lh4_1234';
 $link = mysql_connect($servidor, $usuario, $senha);
 $db = mysql_select_db($banco, $link);


  if(!$link)
  {
      echo "Ocorreu um erro na conexão com o banco de dados.";
       exit();
  }
?>