<?php

class BD{


      public static $instancia=null;
      public static function crearInstancia(){

        if(!isset(self::$instancia)){
            $opciones[PDO::ATTR_ERRMODE ]= PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=id21607489_rogger','id21607489_rogger','Servidor1234@',$opciones);
            echo "conectado...";
        }
        return self::$instancia;
    }


}
/* class BD{


      public static $instancia=null;
      public static function crearInstancia(){

        if(!isset(self::$instancia)){
            $opciones[PDO::ATTR_ERRMODE ]= PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opciones);
            echo "conectado...";
        }
        return self::$instancia;
    }


}*/
?>