<?php
    $text = $_POST['textarea1'];
    $directorioActual = getcwd();
    $directorioActual = $directorioActual. "\Archivos";
    $rutaArchivo = $directorioActual."\documento.txt";
    $fp = fopen($rutaArchivo, "w");
    if(!empty($text)){
        $fp;
        fwrite($fp,$text);
        fclose($fp);
    }
?>