<?php
include('db.php');
/* Getting the value of the input with the name "Correo" and storing it in the variable . */
$Correo=$_POST['Correo'];
$Pass=$_POST['Pass'];
session_start();
/* Setting the session variable `Kalao` to the value of the variable ``. */
$_SESSION['Kalao']=$usuario;


$conexion=mysqli_connect("localhost","root","","");

/* Checking if the user exists in the database. */
$consulta="SELECT*FROM usuario where Correo='$Correo' and Pass='$Pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../frontend/inicio.html");

}else{
    ?>
    <?php
    include("inicio.html");
  ?>
  <h1>ERROR DE AUTENTIFICACION</h1>
  <?php
}
/* Freeing the memory associated with the result. */
mysqli_free_result($resultado);
/* Closing the connection to the database. */
mysqli_close($conexion);