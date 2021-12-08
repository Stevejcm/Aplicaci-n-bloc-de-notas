<?php
    $msg = null;
    $carpeta = htmlspecialchars($_POST['carpeta']);
    $ruta = htmlspecialchars($_POST['ruta']);
    $directorio = $ruta.$carpeta;
    if(!is_dir($directorio)){
        $crear = mkdir($directorio, 0777, true);
        if($crear){
            $msg = "Directorio $directorio creado correctamente";
        }
    }
    else{
        $msg = "El Directorio que intentas crear ya existe";
    }
?>