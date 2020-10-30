<?php
include 'db.php';
$marca_chuteira = $_POST['marca_chuteira'];
$valor_chuteira = $_POST['valor_chuteira'];


#Inserção de camisas ######################################################################

$nome_camisa = $_POST['nome_camisa'];
$valor_camisa = $_POST['valor_camisa'];

$query_inserir_camisa=" INSERT INTO camisas(nome_camisa, valor_camisa)
VALUES('$nome_camisa','$valor_camisa')";
mysqli_query($conexao,$query_inserir_camisa);

header('location:index.php?pagina=Camisas');
exit();

#Inserção de shorts ######################################################################

$nome_short = $_POST['nome_short'];
$valor_short = $_POST['valor_short'];

$query_inserir_short=" INSERT INTO shorts(nome_short, valor_short)
VALUES('$nome_short','$valor_short')";
mysqli_query($conexao,$query_inserir_short);

header('location:index.php?pagina=Shorts');
exit();

#Inserção de chuteiras ######################################################################

$marca_chuteira = $_POST['marca_chuteira'];
$valor_chuteira = $_POST['valor_chuteira'];

$query_inserir_chuteira=" INSERT INTO chuteiras(marca_chuteira, valor_chuteira)
VALUES('$marca_chuteira','$valor_chuteira')";
mysqli_query($conexao,$query_inserir_chuteira);

header('location:index.php?pagina=Chuteiras');
exit();
?>