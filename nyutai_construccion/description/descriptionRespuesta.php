<?php include("../src/config/conexion.php")?>

<?php 
    session_start();

    $description = $_POST['description'];
    $favoriteAnime = $_POST['favoriteAnime'];
    $idUser = $_SESSION['idUser'];

    $compare = "SELECT idDescription FROM descriptions WHERE idDescription = $idUser";
    $queryCompare = mysqli_query($conn, $compare);
    $resultsCompare =  mysqli_fetch_array($queryCompare);
    
    if($resultsCompare == null){

        $sqlDescription = "INSERT INTO descriptions (idDescription, description, favoriteAnime) VALUES ($idUser, '$description', '$favoriteAnime')";
        $queryDescription = mysqli_query($conn, $sqlDescription);
        $results =  mysqli_fetch_array($queryDescription);

        $sqlUpdateUser = "UPDATE users SET idDescription = $idUser WHERE idUser = $idUser";
        $queryUpdateUser = mysqli_query($conn, $sqlUpdateUser);

        header("Location: ../description/description.php");

    }else{

        if($description != null && $favoriteAnime != null){

            $sqlDescription = "UPDATE descriptions SET description = '$description', favoriteAnime='$favoriteAnime'  WHERE idDescription = $idUser";
            $queryDescription = mysqli_query($conn, $sqlDescription);
    
            header("Location: ../description/description.php");

        }else{

            if($description == null && $favoriteAnime == null){

                header("Location: ../description/description.php");

            }else{

                if($description == null){

                    $sqlDescription = "UPDATE descriptions SET favoriteAnime='$favoriteAnime'  WHERE idDescription = $idUser";
                    $queryDescription = mysqli_query($conn, $sqlDescription);

                    header("Location: ../description/description.php");

                }

                if($favoriteAnime == null){

                    $sqlDescription = "UPDATE descriptions SET description = '$description' WHERE idDescription = $idUser";
                    $queryDescription = mysqli_query($conn, $sqlDescription);
            
                    header("Location: ../description/description.php");

                }
            }
        }
    }

?>
