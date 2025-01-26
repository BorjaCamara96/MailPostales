<?php
    function dibujaInputText($nombre, $alias, $error){
        $formulario = 
        "<tr>
            <td>".$nombre.": </td>
            <td><input type='text' name='".$alias."' placeholder='Introduce ".$nombre."'";
            if(!$error) $formulario .= "value='".$_POST[$alias]."'";
            $formulario .= "/></td>";
            if($error) $formulario .= "<td>El campo ".$nombre." no es valido</td>";
        $formulario .= "</tr>";
        return $formulario;
    }
    function dibujaInputTextArea($nombre, $alias, $error){
        $formulario = 
        "<tr>
            <td>".$nombre.": </td>
            <td><textarea style='resize:none' cols='30' rows='5' name='".$alias."' placeholder='Introduce ".$nombre."'>";
            if(!$error) $formulario .= $_POST[$alias];
            $formulario .= "</textarea></td>";
            if($error) $formulario .= "<td>El campo ".$nombre." no es valido</td>";
        $formulario .= "</tr>";
        return $formulario;
    }
    function dibujaSelect($nombre, $alias, $array, $error, $campoVacio){
        $formulario = "<tr>
            <td>".$nombre.": </td>
            <td><select name='".$alias."'>";
                if($campoVacio) $formulario .= "<option value=''></option>";
                foreach($array as $opcion){
                    $formulario .= "<option value='".$opcion."'";
                        if(!$error){
                            if($opcion == $_POST[$alias]) $formulario .= "selected";
                        }
                    $formulario .=">".$opcion."</option>";
                }
        $formulario .= "</select></td>";
        if($error) $formulario .= "<td>El campo ".$nombre." no es valido</td>";
        $formulario .= "</tr>";
        return $formulario;
    }    
    function dibujaSelectMultiple($nombre, $alias, $array, $error, $campoVacio){
        $formulario = "<tr>
            <td>".$nombre.": </td>
            <td><select name='".$alias."[]' multiple>";
                if($campoVacio) echo "<option value=''></option>";
                foreach($array as $opcion){
                    $formulario .= "<option value='".$opcion."'";
                        if(!$error){
                            if($opcion == $_POST[$alias]) $formulario .= "selected";
                        }
                    $formulario .=">".$opcion."</option>";
                }
        $formulario .= "</select></td>";
        if($error) $formulario .= "<td>El campo ".$nombre." no es valido</td>";
        $formulario .= "</tr>";
        return $formulario;
    }   
    function dibujaInputRadio($nombre, $alias, $array, $opcion, $error){
        $formulario = 
        "<tr>
            <td>".$nombre.": </td>
        </tr>";
        $contador = 0;
            foreach($array as $img){
                if($contador == 0) $formulario .= "<tr>";
                $contador++;
                $formulario .= "<td class='img'><img class='".$alias."' src='img/".$opcion."/".$img."'/>";
                $formulario .= "<input type='radio' name='".$alias."' value='".strtolower($img)."'";
                if($_POST[$alias] == strtolower($img)) $formulario .= "checked";
                $formulario .= "/></td>";
                if($contador == 5) {
                    $formulario .= "</tr>";
                    $contador = 0;
                }
            }        
        if($error) $formulario .= "<tr><td>El campo ".$nombre." no es valido</td></tr>";
        return $formulario;
    }
    function dibujaInputBoton($nombre, $alias, $type){
        $formulario = "<td><input type='".$type."' name='".$alias."' value='".$nombre."'/></td>";
        return $formulario;
    }
    
?>