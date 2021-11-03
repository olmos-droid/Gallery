<?php
class Picture
{
    private $_title = '';
    private $_filename = '';
    /*Constructor*/
    function __construct($title, $filename)
    {
        $this->_title = $title;
        $this->_filename = $filename;
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
