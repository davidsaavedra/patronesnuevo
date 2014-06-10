<?php

 require_once '../vista/queesvista.php'; 
 require_once '../modelo/queesmodelo.php';        
        
        
        
        Class queescontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
        public function __construct(){
            
            $this->vista = new queesvista();
            $this->modelo= new queesmodelo();
            
        }
        
       public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
        $index = new queescontrol();
        
       $index->principal();
?>
