<?php
/* Getting the values of the variables `usuario` and `contraseña` from the form. */
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

/* A SQL query that is selecting all the columns from the table `usuario` where the column `Correo` is
equal to the value of the variable `` and the column `Pass` is equal to the value of the
variable `ña`. */
$consulta = "SELECT*FROM usuario where Correo = '$usuario' and Pass = '$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("join.php");
    ?>
    <h3 class="bad">ERROR DE AUTENTIFICACION</h3>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);