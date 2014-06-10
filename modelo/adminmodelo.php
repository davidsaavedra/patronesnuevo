<?php
require_once '../core/conexion.php';



class adminmodelo{
    
    public $conexion;
            
            
            public function __construct() {
                $this->conexion=new conexion();
            }
    
            
            public function get_articulos(){
                
                $query="SELECT nombreusuario,fecharegistro,rol,estado FROM usuarios";
                return  $this ->conexion ->get_resultados_query($query);
            }   
    
}

?>
