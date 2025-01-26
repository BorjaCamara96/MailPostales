<?php
    require("functions.php");
    require("conexionbd.php");

    $validaSelect = false;

    if(isset($_GET['error'])) $validaSelect = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de postales</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div>
        <h1>Envío de postales</h1>
        <form action="postales.php" method="post">
                <?php
                    echo "<table>";
                    $opciones = scandir("img");
                    $opciones = array_slice($opciones, 2);
                    echo dibujaSelect("Opciones", "opcion", $opciones, $validaSelect, true);
                    echo "</table>";
                    echo dibujaInputBoton("Acceder", "acceder", "submit");       
                ?>
            </table>
        </form>
    </div>
</body>
</html>