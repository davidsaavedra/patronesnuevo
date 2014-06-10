<?php

 require_once '../vista/sesionvista.php'; 
 require_once '../modelo/sesionmodelo.php';        
        
        
        
        Class sesioncontrol{
    
        public   $vista;
        public   $modelo;
              
        
        
        
       $objses= new sesion();
       
       
       $usuario=$_POST['user'];
       $contra=$_POST['pass'];
       
       
       $datos = $objses->modelo->get_usuario($usuario);
       
       if ($datos){
           if (conra==$datos['pass']){
           session_start()
               $_SESSION['usuario']=$usuario;
           }
       }
        
        public function principal() {
            
            $consulta = $this->modelo->get_articulos();
            $this->vista->refactory_contenido($consulta);


}
        
        }
        
        
        
        
       // $index = new sesioncontrol();
        
        //$objindex->principal();
?>