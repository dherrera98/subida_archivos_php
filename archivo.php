<?php

function ComprobarExtension($extensiones, $fichero)
{
    foreach($extensiones as $e){
        $patron = "%\.($e)$%i";
        if(preg_match($patron, $fichero["name"]) == 1) return true;
    }
     return false;
}

function ComprobarTam($fichero, $tamMax, $tamMin)
{
    $tam = $fichero["size"];
    if($tam < $tamMax && $tam > $tamMin) return true;
    return false;
}

function SubirArchivo($fichero, $carpeta){
    $dir_subida = "./" . $carpeta."/";
    $fichero_subido = $dir_subida . basename($fichero["name"]);

    if (move_uploaded_file($fichero['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }
    
}
?>