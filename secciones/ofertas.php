<?php


include_once '../configuraciones/bd.php';

$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$titulo=isset($_POST['titulo'])?$_POST['titulo']:'';
$distrito=isset($_POST['distrito'])?$_POST['distrito']:'';
$mensaje=isset($_POST['mensaje'])?$_POST['mensaje']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';


if($accion!=''){
    switch($accion){
        case 'agregar':
           $sql="INSERT INTO publicacion ( id ,titulo ,distrito , mensaje) VALUES (NULL,:titulo,:distrito,:mensaje)";
           $consulta=$conexionBD->prepare($sql);
           $consulta->bindParam(':titulo',$titulo);
           $consulta->bindParam(':distrito',$distrito);
           $consulta->bindParam(':mensaje',$mensaje);
           $consulta->execute();



            echo $sql;
            break;
            case "Seleccionar":
                $sql="SELECT * FROM publicacion WHERE titulo=:titulo";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(":titulo",$titulo);
                $consulta->execute();
                $publicacion=$consulta->fetch(PDO::FETCH_ASSOC);
                $id=$publicacion['id'];
               $titulo=$publicacion['titulo'];
               $distrito=$publicacion['distrito'];
               $mensaje=$publicacion['mensaje'];
           break;
    }
}


$consulta=$conexionBD->prepare("SELECT * FROM publicacion");
$consulta->execute();
$listaOfertas=$consulta->fetchAll();


?>