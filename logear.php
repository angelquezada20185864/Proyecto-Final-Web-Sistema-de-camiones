<?php
require 'config/db.php';

$btnemail = $_POST["btnemail"];
$btnpass = $_POST["btnpass"];
      


$consultaemail= "SELECT`Correo` FROM `login`";
$queryemail= mysqli_query($connection,$consultaemail);
$resultadoemail= $queryemail;

$consultapass = "SELECT `Contraseña` FROM `login`";
$querypass = mysqli_query($connection,$consultapass);
$resultadopas= $querypass;

if($btnemail=$resultadoemail && $btnpass=$resultadopas){
        
    header("location: index.php");


}else{

    echo 'Error de datos';
}