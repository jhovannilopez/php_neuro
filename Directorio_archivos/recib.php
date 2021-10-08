<?php
//definimos el tamaño maximo de los archivos
$tamax=2000000; 
//obtenemos el numero de imagenes seleccionadas
$tamano=count($_FILES["ARCH"]["name"]);
//las sacamos una a una 
for($C=0; $C<$tamano; $C++)
    {
        $nombre=$_FILES["ARCH"]["name"][$C];
        $tam=$_FILES["ARCH"]["size"][$C];
        $tmp=$_FILES["ARCH"]["tmp_name"][$C];
        echo "<br>".$nombre;
        echo "<br>".$tam;
        echo "<br>".$tmp;
        $id=47;
        if ($tam>$tamax)
        {
            echo "el archivo".$nom." sobrepasa el tamaño maximo";
        }
        else 
        {
            $v=explode(".",$nombre);
            $t=count($v);
            $ext=$v[$t-1];
            echo "<br>la extension es ".$ext;
            //creamos una variable apartir  del metodo date que nos debolvera la fecha actual detallada
            $newnom=$id.date("Y-m-d-H-i-s")."-".$C.".".$ext;
            //usamos la funcion move uploaded y le damos el nombre temporal, mas la ruta donde moverlo y el nombre del archivo
            move_uploaded_file($tmp,"up/".$newnom);
        }
        
    }
?>