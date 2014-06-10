
<?php
require_once '../core/conexion.php';



class sesionmodelo{
    
    public $conexion;
            
            
            public function __construct() {
                
            }
    
            
            public function get_usuario(){
                
                $query="SELECT nombre, pass FROM usuario where nombre =".$usuario;
               return  $this ->conexion ->get_resultados_query($query);
                
            }   
    
}

?>
