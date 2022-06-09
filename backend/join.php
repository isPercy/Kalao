<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: ../frontend/categoria.html');
            break;

            case 2:
                header('location: ../frontend/carro.html');
            break;

            case 5:
                header('location: ../frontend/inicio.html');
            break;

            default:
        }
    }

    if(isset($_POST['Correo']) && isset($_POST['Pass'])){
        $Correo = $_POST['Correo'];
        $Pass = $_POST['Pass'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuario WHERE Correo = :Correo AND Pass = :Pass');
        $query->execute(['Correo' => $Correo, 'Pass' => $Psass]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: inicio.html');
                break;
    
                case 5:
                header('location: carro.html');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        correo: <br/><input type="text" name="correo"><br/>
        Password: <br/><input type="text" name="password"><br/>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>