<?php include("../../src/config/conexion.php")?>

<?php 
    session_start();

    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $idUser = $_SESSION['idUser'];
    $passwordBD = "UPDATE users SET password = '$password' WHERE idUser = $idUser";
    $query = mysqli_query($conn, $passwordBD);

    header("location: logout.php");
?>