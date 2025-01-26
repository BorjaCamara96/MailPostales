<?php
    require("functions.php");
    require("conexionbd.php");
    require("mail.php");

    $validaImg = false;
    $validaEmails = false;
    $validaMensaje = false;
    $validaAsunto = false;

    if(isset($_POST['enviar'])){
        $validaImg = empty($_POST["imagen"]);
        $validaEmails = empty($_POST['destinatario']);
        $validaMensaje = empty($_POST['mensaje']);
        $validaAsunto= empty($_POST['asunto']); 
        
        if(!$validaImg and !$validaEmails and !$validaMensaje and !$validaAsunto){
            $imagen = $_POST['opcion']."/".$_POST['imagen'];
            $destinatario = $_POST['destinatario'];
            $mensaje = $_POST['mensaje'];
            $asunto = $_POST['asunto'];

            $message = "";
            foreach($destinatario as $email){
                $message .= (sendMail($imagen, $email, $mensaje, $asunto)) ? "Mensaje enviado a " : "Error al enviar a ";
                $message .= $email."<br>";
            }
        }
    }
    else if(isset($_POST['acceder'])){
        $validaSelect = false;
        $validaSelect = empty($_POST['opcion']);
        if($validaSelect) header("Location:index.php?error");
    }
    else{
        header("Location:index.php");
    }
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
        <form action="?" method="post">
            <?php 
                $opcion = $_POST['opcion'];    
                echo "<input type='hidden' name='opcion' value='".$opcion."'/>";
                echo "<table>";   
                $imagenes = scandir("img/".$opcion);
                $imagenes = array_slice($imagenes, 2);
                echo dibujaInputRadio("Imagen", "imagen", $imagenes, $opcion, $validaImg);
                echo "</table>";
                $stmt = recuperarEmails();
                $stmt->execute();
                $emails = array();
                while($fila = $stmt -> fetch(PDO::FETCH_NUM)){
                    array_push($emails, $fila[0]);
                }               
                echo "<table>";
                echo dibujaSelectMultiple("Destinatario", "destinatario", $emails, $validaEmails, false);
                echo dibujaInputTextArea("Mensaje", "mensaje", $validaMensaje);
                echo dibujaInputText("Asunto", "asunto", $validaAsunto);
                echo "</table>";
                echo dibujaInputBoton("Enviar", "enviar", "submit");
                echo dibujaInputBoton("Volver", "volver", "submit");
                if(!empty($message)) echo "<p>".$message."</p>";
            ?>
        </form>
    </div>
</body>
</html>