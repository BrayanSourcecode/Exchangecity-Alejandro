<?php 
include_once "/app/funciones/conexionDB.php";

$pub_codigo=$_REQUEST["pub_codigo"] ;
$sql2="DELETE FROM publicacion WHERE pub_codigo='$pub_codigo'";
if(mysqli_query($db,$sql2)){
    
    $_SESSION["publicacion_eliminada"]="la publicacion se elimino correctamente";
    header("location: /Includes/misPublicaciones.php");
}else{
        echo "error".mysqli_error($db) ;
}




?>
