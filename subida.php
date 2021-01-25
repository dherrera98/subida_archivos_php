<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subida</h1>
    <a href="galeria.php">Ver fotos</a>
    <p>
        <?php
            include_once("archivo.php");
            $imagen = $_FILES["foto"];

            $ComprobarExtensiones = ComprobarExtension(array("jpg","png","svg", "gif"), $imagen);
            $ComprobarTam = ComprobarTam($imagen, 10485760, 50);

            if($ComprobarExtensiones && $ComprobarTam) {
                SubirArchivo($imagen, "galeria");
                echo "Archivo subido correctamente";
            }else{
                if(!$ComprobarExtensiones) echo "<p style='color:red'>Error al subir el archivo: archivo sin una extension valida</p>";
                if(!$ComprobarTam) echo "<p style='color:red'>Error al subir el archivo: el archivo no tiene el tamaño permitido</p>";
            }
        ?>
    </p>
</body>
</html>