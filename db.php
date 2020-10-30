<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "projeto";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);
#Chuteiras
$query_chuteira= "SELECT * FROM chuteiras";
$result_chuteira= mysqli_query($conexao,$query_chuteira); 
#Camisas
$query_camisas= "SELECT * FROM camisas";
$result_camisas= mysqli_query($conexao,$query_camisas); 

#Shorts
$query_shorts = "SELECT * FROM shorts";
$result_shorts = mysqli_query($conexao,$query_shorts); 




?>














