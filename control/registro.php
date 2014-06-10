<?php

 require_once '../vista/registrovista.php'; 
 require_once '../modelo/registromodelo.php';        
        
        
        
        Class registrocontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new registrovista();
            $this->modelo= new registromodelo();
            
        }
        
        public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new registrocontrol();
        
        $index->principal();
?>
