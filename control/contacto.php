<?php

 require_once '../vista/contactovista.php'; 
 require_once '../modelo/contactomodelo.php';        
        
        
        
        Class contactocontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new contactovista();
            $this->modelo= new contactomodelo();
            
        }
        
       public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new contactocontrol();
        
       $index->principal();
?>
