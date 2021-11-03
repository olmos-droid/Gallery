<?php

use UploadError as GlobalUploadError;

include('PictureClass.php');
class Gallery
{
  private $_gallery = array();
  private $_filename;
  /*Constructor: Recibe la ruta del archivo fotos.txt*/
  function __construct($filename)
  {
    $this->_filename = 'fotos.txt';
  }
  /*
  *Recorre el archivo fotos.txt y para cada titulo_ubicacion$titulo_ubicaciona, crea un
  *elemento Picture que lo añade al atributo $_gallery[]
  */
  function loadGallery()
  {
    try {
      //code...
      if (!file_exists($this->_filename)) {
        throw new UploadError("Error: Please upload file, empty gallery");
        die;
      }
    } catch (UploadError $e) {
      header('Location: index.php?upload=error&msg=' . urlencode($e->getMessage()));
     
    }

  

    // fopen($this->_filename, 0777, );

    $fileArray = file($this->_filename);
    $file = fopen($this->_filename, "r");
    for ($i = 0; $i < count($fileArray); $i++) {
      $line = explode("###", fgets($file));
      $picture = new Picture($line[0], $line[1]);
      array_push($this->_gallery, $picture);
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
}
/*
* Clase personalizada extendida de Exception que utilizaremos para lanzar errores
* en la subida de archivos. Por ejemplo:
* throw new UploadError("Error: Please select a valid file format.");
*/
// class UploadError extends Exception
// {
// }
