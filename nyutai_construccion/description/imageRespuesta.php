<?php include("../src/config/conexion.php")?>

<?php 
    session_start();

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $idUser = $_SESSION['idUser'];

    $compareImage = "SELECT idIamge FROM images WHERE idIamge = $idUser";
    $queryCompare = mysqli_query($conn, $compareImage);
    $resultsCompare =  mysqli_fetch_array($queryCompare);

    if($resultsCompare == null){

        $sqlImage = "INSERT INTO images(idIamge, archiveImage) VALUES($idUser, '$image')";
        $queryImage = mysqli_query($conn, $sqlImage);
        $results =  mysqli_fetch_array($queryImage);

        $sqlUpdateDescription = "UPDATE descriptions SET idIamge = $idUser WHERE idDescription = $idUser";
        $queryUpdateDescription = mysqli_query($conn, $sqlUpdateUser);

        header("Location: ../description/description.php");

    }else{

        $sqlImage = "UPDATE images SET archiveImage = '$image' WHERE idIamge = $idUser";
        $queryImage = mysqli_query($conn, $sqlImage);

        header("Location: ../description/description.php");

    }

?>