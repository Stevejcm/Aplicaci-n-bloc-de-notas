<?php
    $directorioActual = getcwd();
    $directorioActual = $directorioActual. "\Archivos";
    $lista = scandir($directorioActual);
    foreach($lista as $archivo){
        echo "<h2 align ='center'>"."-> ".$archivo."</h2><br>";
    }
?>