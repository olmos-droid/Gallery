<?php
class Picture
{
    private $title;
    private $filename;
    /*Constructor*/
    function __construct($title, $filename){
        $this->title=$title;
        $this->filename=$filename;
    }
    /*
  *Getters. Lo que quiere decir que los atributos de
  *title y filename son private
  */
  public function __set($propiedad, $valor)
  {
      if (property_exists($this, $propiedad)) {
          $this->$propiedad = $valor;
      }
  }
  public function __get($propiedad)
  {
      if (property_exists($this, $propiedad)) {
         return $this->$propiedad;
      }
      return null;
  }    
}
?>