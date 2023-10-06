<?php include("../src/config/conexion.php")?>

<?php
    $idUser = $_GET['idUser'];
    
    $query = "DELETE FROM users WHERE idUser = $idUser";

    $result = mysqli_query($conn, $query);

    header("location: ../login/login.php");
?>