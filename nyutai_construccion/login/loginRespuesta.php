<?php include("../src/config/conexion.php") ?>

<?php 
    session_start();

     if(!empty($_POST['email']) && !empty($_POST['password'])){
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $message = '';

        $records = "SELECT idUser, mail, password FROM users WHERE mail = '$mail'";
        $mailDB = "SELECT mail FROM users WHERE mail=$mail";
        $query = mysqli_query($conn, $records);
        $results =  mysqli_fetch_array($query);

        if((count($results) != null) && (password_verify($_POST['password'], $results['password']))){
            $_SESSION['idUser'] = $results['idUser'];
            header("Location: ../description/description.php");
        }else{
            header("location: ../login/login.php");
            $message = 'Esta mal el correo o la contraseña, cambialo y vuelve a intentar';          
        }
    }
?>


