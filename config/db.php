<?php 
//Conectando a la base de datos fenatrano

$dbhost = "sql306.epizy.com"; //el host
$dbuser = "epiz_29470013";      // el usuario 
$dbname="epiz_29470013_fenatrano";   // el nombre de la BD
$dbpassword="fTrpGHckuJ89Zf";        // Contraseña de la BD 


$connection = mysqli_connect($dbhost, $dbuser, $dbpassword,$dbname);



//probando conexion
/*
     if (!$connection)
    {
         echo "fallo la conexion";
    }
    else
    {
        echo "conectado" ;
    };
*/


