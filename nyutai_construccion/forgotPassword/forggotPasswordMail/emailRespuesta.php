<?php include("../../src/config/conexion.php")?>

<?php 
    session_start();

    $mail = $_POST['email'];
    $mailBD = "SELECT idUser, mail FROM users WHERE mail = '$mail'";
    $query = mysqli_query($conn, $mailBD);
    $results =  mysqli_fetch_array($query);



    if($results['idUser'] != null){
        $_SESSION['idUser'] = $results['idUser'];
        header("location: ../forggotPasswordPassword/forggotPasswordPassword.php");
    }else{
        header("location: forggotPasswordMail.php");
    }
?>