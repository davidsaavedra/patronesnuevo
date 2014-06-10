<?php

 require_once '../vista/ingresarvista.php'; 
 require_once '../modelo/ingresarmodelo.php';        
        
        
        
        Class ingresarcontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new ingresarvista();
            $this->modelo= new ingresarmodelo();
            
        }
        
        public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new ingresarcontrol();
        
        $index->principal();
?>
