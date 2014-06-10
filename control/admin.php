<?php

 require_once '../vista/adminvista.php'; 
 require_once '../modelo/adminmodelo.php';        
        
        
        
        Class admincontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new adminvista();
            $this->modelo= new adminmodelo();
            
        }
        
        public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new admincontrol();
        
        $index->principal();
?>
