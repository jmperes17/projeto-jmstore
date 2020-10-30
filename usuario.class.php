<a href="?pagina=Chuteiras">Chuteiras</a>
<?php

require_once "db.php";

class usuario{
    private $id_usuario;
    private $senha;
    private $status;
    private $data_cadastro

    public function verificarUsuario(){
        if ( $id_usuario = $_POST['id_usuario'] && $senha = $_POST['senha']){

            return $status = true;

        else{
            return $status= false;
            }  

        }
       
        

    }

    $u = new Usuario;
    $u->getId_usuario()



}