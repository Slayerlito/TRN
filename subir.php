

<?php
   
   if(isset($_REQUEST['uploadimg'])){
   $dir_subida = "C:\\xampp/htdocs/TRN/images/slider/";
   $fichero_subido = $dir_subida . $_FILES['imagen']['name'];
    if(move_uploaded_file($_FILES["imagen"]['tmp_name'], $fichero_subido)){
            echo "funciona";
        }  else {
            echo "error";
        }
   }    