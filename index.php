<?php
 include 'db.php';
 include 'header.php';
 
 
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina='home';
}
 
if($pagina=='Chuteiras'){
     include 'chuteiras.php'; 
 }
elseif($pagina=='Camisas'){
     include 'camisas.php';
 }
 elseif($pagina=='Inserir'){
     include 'inserir_chuteira.php';
 }
elseif($pagina=='Shorts'){
     include 'shorts.php';
 }
 elseif($pagina=='Contato'){
    include 'contato.html';
}
elseif($pagina=='Inserir camisa'){
    include 'inserir_camisa.php';
}
elseif($pagina=='Inserir short'){
    include 'inserir_short.php';
}

elseif($pagina=='Galeria'){
    include 'galeria.php';

}
else{
     include 'home.php';
 }

 include 'footer.php';




 








 



 




 
 ?>
 
 