<?php

 require_once '../vista/CrearForovista.php'; 
 require_once '../modelo/CrearForomodelo.php';        
        
        
        
        Class CrearForocontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new CrearForovista();
            $this->modelo= new CrearForomodelo();
            
        }
        
       public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new CrearForocontrol();
        
       $index->principal();
?>
