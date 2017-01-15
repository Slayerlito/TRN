
 <form acction="prueba.php" method="POST" enctype=”multipart/form-data">
                <input type="file" name="imagen" />
                <input type="text" value="as" name="hola"/>
                <input type="submit" value="Subir Imagen" name="upload"/>
</form>

<?php
   
   if(isset($_REQUEST['upload'])){
       $a = $_REQUEST['imagen'];
       echo $a;
       var_dump($a);
   $dir_subida = "C:\\xampp/htdocs/TRN/";
   $fichero_subido = $dir_subida . basename($_FILES['imagen']['imagen']);
    if(move_uploaded_file($_FILES["imagen"]['tmp_name'], $fichero_subido)){
            echo "funciona";
        }  else {
            echo "error";
        }
   }  
   
   ?>