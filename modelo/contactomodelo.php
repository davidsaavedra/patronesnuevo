<?php
require_once '../core/conexion.php';



class contactomodelo{
    
    public $conexion;
            
            
            public function __construct() {
                $this->conexion=new conexion();
            }
    
            
           public function get_articulos(){
                
                $query="SELECT nombreforo,imagen FROM foro";
                return  $this ->conexion ->get_resultados_query($query);
            }   
   
}

?>