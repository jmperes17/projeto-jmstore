<?php

class Galeria {
    public function __construct($imagens,$cel,$tab,$desk){
        echo "<div class='row'>";
                
                
                    echo "<div class='col s$cel m$tab l$desk' style='padding:0'>";
                    echo "<img src='img/$imagens' width='360' height='200' class='responsive.img materialboxed'>";
                    echo "</div>";
                 
        
        echo  "</div>";

    }
}
    $imagens=['arsenal.jpg','arsenal2.jpg','arsenal3.jpg'];
    
    #$galeria = new Galeria($imagens,12,6,4);
    

    foreach ($imagens as $valor){
        
        new Galeria($valor,12,6,4);
        echo "<br>";
    } 

    


?>
