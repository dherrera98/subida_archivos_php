<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Galería de fotos</h1>
    <a href="subida.html">Subir foto nueva</a>
    <p>
        <?php
            echo "<table border=1>";
            $puntero = opendir('galeria');
            $i = 1;
            while (false !== ($foto = readdir($puntero)))
            {
                if ($foto != "." && $foto != "..")
                {
                    if ($i == 1) echo "<tr>";
                    echo "<td><a href='galeria/$foto' target='_blank'>";
                    echo "<img src='galeria/$foto' width=100 height=100></img>";
                    echo "</a></td>";
                    if ($i == 4)
                    {
                        echo "</tr>";
                        $i = 0;
                    }
                    $i++;
                }
            }
            closedir($puntero);
            echo "</table>";
        ?>
    </p>
</body>
</html>
