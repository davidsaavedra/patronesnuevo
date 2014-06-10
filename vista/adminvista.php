<?php


class adminvista{
    public $base;
    public $admin;
    public $nav;
    public $diccionario;
    
    public function __construct() {
        $this->base=  file_get_contents('../staticos/Templates/base.html');
        $this->admin=  file_get_contents('../staticos/Templates/admin.html');
        $this->nav=  file_get_contents('../staticos/Templates/nav.html'); 
        
        $this->actualizardiccionario();
        
    }
    public function actualizardiccionario(){
        $this->diccionario= array('base'=>$this->base,'admin'=>$this->admin,'nav'=>$this->nav);
    }
    
    
    public function refactory_contenido($datos) {
        
         $article_total="";
         $reg="<td >{nombreusuario}</td>
              <td >{fecharegistro}</td>
              <td >{rol}</td>
              <td >{estado}</td>";
         
        foreach ($datos as $valor){
           
         
           
            $aux=$this->base;
            $aux=  str_ireplace('{nombreusuario}', $valor['nombreusuario'], $aux);                        
            $aux=  str_ireplace('{fecharegistro}', $valor['fecharegistro'], $aux);
            $aux=  str_ireplace('{rol}', $valor['rol'], $aux);
            $aux=  str_ireplace('{estado}', $valor['estado'], $aux);
            
            
          $article_total .=$aux;
                        
       }
        
          
        
        //echo $article_total;
        // $this->base = str_ireplace("{registros}", $this->$reg,$this->base );
        $this->base = str_ireplace("{registros}", $article_total,$this->admin );
        $this->base = str_ireplace("{nav}", $this->nav,$this->base );
      // $this->base = str_ireplace("{contenido}", $this->registros,$this->base );

    
        
        
        echo $this->base;
        
        
        
        
    }
    
}
?>