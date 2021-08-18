<!-- conexion a BD -->
<?php include ('config/db.php') ?>
<?php $lavadoras ="SELECT * FROM `lavadoras`";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Incluyendo el main.css de mi proyecto-->
<link rel="stylesheet" href="css/main.css">

<style>
    #camiones{
        position:absolute;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
table{

    position:-ms-page;
    background-color: teal;
    color: white;
    border-radius: 14px;
}
.btn btn-primary{
    text-align: center;
    border-style:groove;
}
</style>

    <title>Fenatrano</title>
  </head>
  <body>
    

        <!-- Barra de navegacion de Fenatrano-->
  <nav class="navbar navbar-expand-sm navbar-dark" id="barra">
    <a class="navbar-brand" id="fenatrano" >Fenatrano</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Salir</a>
            </li>
           
        </ul>
    
    </div>
</nav>
<!--Logica de la Pagina a partir de aqui en adelante -->

<div class="container mt-5">
<div class="btn-toolbar" role="toolbar" aria-label="">
    <div class="btn-group" role="group" aria-label="">
        <button type="button"class="btn btn-primary" ><a href="camiones.php">CAMIONES</a></button>
        <button type="button"class="btn btn-primary" ><a href="lavadoras.php">LAVADORAS</a></button>
        <button type="button"class="btn btn-primary" ><a href="despachos.php">DESPACHOS</a></button>
    </div>
    
</div>
</div>

<!-- cargando datos de la BD -->

    <div class="container mt-5"> 
    <!-- Options camiones -->
    <div id="camiones">

    <label>  
        <label >CAMIONES</label><br>
        <select name="">

        <?php 
        
        include ('config/db.php');

        $consultacamion="SELECT * FROM `camiones`";
        $querycamion= mysqli_query($connection,$consultacamion);
        
        
        ?>

        <?php  foreach($querycamion as  $opciones): ?>
        
            <option value="<?php echo $opciones['Marca'] ?>"><?php echo $opciones['Marca'] ?></option>
          
        
            <?php  endforeach ?>

        </select>
        <br><br>
        <label> 
            <label>LAVADORAS</label><br>
        <select name="">

        <?php 
        
        include ('config/db.php');

        $consultalavadora="SELECT * FROM `lavadoras`";
        $querylavadora= mysqli_query($connection,$consultalavadora);
        
        
        ?>

        <?php  foreach($querylavadora as  $opciones): ?>
        
            <option value="<?php echo $opciones['Marca'] ?> "><?php echo $opciones['Marca'] ?></option>
          
            <?php  endforeach ?>

        </select>
    
    </label>    


         <table>

            <tr>

                <th>ID</th>
                <th>Codigo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <td>-</td>
                <th>Valor</th>
                <th>Peso en libras</th>

            </tr>
            <tbody>

            <?php $resultado =mysqli_query($connection,$lavadoras);
            
            while ($row=mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo  $row['ID'];?></td>
                    <td><?php echo $row['Codigo']?></td>
                    <td><?php echo $row['Marca']?></td>
                    <td><?php echo $row['Modelo']?></td>
                    <td><?php echo $row['Valor']?></td>
                    <td>-</td>
                    <td><?php echo $row['Peso_libra']?></td>
                    


                </tr>
                <?php
            }?>
            </tbody>

         </table>

            

    </div>    









    </div>






  </body>
</html>