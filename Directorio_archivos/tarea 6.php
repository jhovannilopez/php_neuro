<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarea 6</title>
</head>
<body >
    <center>
    <div style="margin:15px; background:orange; color:blue; width:50%; border-radius:20px; padding: 20px 50px; border-width:3px;border-style: solid; border-color:blue;">
        
                <h2 style="color:black;">TAREA 6</h2>
                <h3>Manejo de directorios y archivos</h3>
                <h6 style="color: white">Desarrollar una app html para enviar archivos a un archivo php el cual decepcionara el archivo y lo guardara en una carpeta llamada "up", el nombre del archivo a guardar debe ser codificado para que no haya problemas de sobre escritura.</h6>
            
                <form action="http://localhost/php_neuro/Directorio_archivos/recib.php" method="post" enctype="multipart/form-data">
                <input name="ARCH[]" type="file" multiple="multiple">
            <br>
            <br>
                <button style="border-radius:20px">ENVIAR</button>
        
    </div>
    </center>
</form>
    
</body>
</html>