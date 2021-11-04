<?php
include('PictureClass.php');
class Gallery
{
  private $_filename = '';
  private $_gallery = [];

  function __construct($filename)
  {
    $this->_filename = $filename;
    $this->loadGallery();
  }

  function loadGallery()
  {
    if (file_exists($this->_filename)) {
      $file = fopen($this->_filename, "r");
      
      while (!feof($file)) {
        $line = trim(fgets($file));
        $pic_info = explode("###", $line);
        $image_path = $image_path = $_SERVER['DOCUMENT_ROOT'] . '/' . $pic_info[1];
        if ($pic_info[0] && $this->is_image($image_path)) {
          $picture = new Picture($pic_info[0], $pic_info[1]);
          array_push($this->_gallery, $picture);
        }
      }
      fclose($file);
    }
  }
  /*
  *Getters y setters genericos usando la propiedad propertyu_exists para con un get y set poder llamar y setear a todos los atributos por separado
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
  public function is_image($path)
  {
    $info = getimagesize($path);
    $image_type = $info[2];

    if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
      return true;
    }
    return false;
  }
}
