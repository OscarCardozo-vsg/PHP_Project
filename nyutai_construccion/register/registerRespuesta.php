<?php include("../src/config/conexion.php")?>

<?php 
    session_start();

    $mail = $_POST['email'];
    $userNick = $_POST['userNick'];
    $userName = $_POST['personName'];
    $birthDate = $_POST['birthDate'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gener = $_POST['gener'];

    $compare = "SELECT mail FROM users WHERE mail = '$mail'";
    $queryCompare = mysqli_query($conn, $compare);
    $resultsCompare =  mysqli_fetch_array($queryCompare);

    if($resultsCompare == null){

        $sql = "INSERT INTO users (mail, password, userNick, userName, birthDate, gener) VALUES ('$mail', '$password', '$userNick', '$userName', '$birthDate', '$gener')";
        $query = mysqli_query($conn, $sql);

        $sqlIdUser = "SELECT idUser FROM users WHERE mail = '$mail'";
        $result = mysqli_query($conn, $sqlIdUser);
        $resultIdUser =  mysqli_fetch_array($result);
        $_SESSION['idUser'] = $resultIdUser['idUser'];

        header("Location: ../description/description.php");

    }else{

        header("location: ../login/login.php");

    }
?>