<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion']))
    {
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['rol']))
    {
        switch($_SESSION['rol'])
        {
            case 1:
                header('location: Visitante')
            break;

            case 2:
                header('location: Usuario')
            break;
            
            case 3:
                header('location: Cliente')
            break;

            case 4:
                header('location: Moderador')
            break;

            case 5:
                header('location: Admin.php')
            break;

            default:
        }
    }

    if(isset($_POST['Correo']) && isset($_POST['Pass']))
    {
        $Correo = $_POST['Correo'];
        $Pass = $_POST['Pass'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuario WHERE Correo = :Correo AND Pass = :Pass');
        $query->execute(['Correo' => $Correo, 'Pass' => $Pass]);

        $row = $query->fetch(PDO::FET_NUM);
        if($row == true)//validar roll
        {
            $rol= $row[3]
            $_SESSION['rol'] = $rol;
            
            switch($_SESSION['rol'])
        {
            case 1:
                header('location: Visitante.php')
            break;

            case 2:
                header('location: Usuario.php')
            break;
            
            case 3:
                header('location: Cliente.php')
            break;

            case 4:
                header('location: Moderador.php')
            break;

            case 5:
                header('location: Admin.php')
            break;

            default:
        }
        }

        else{//no existe el usuario
            echo "El correo y contraseña no coinciden"
        }
    }

?>