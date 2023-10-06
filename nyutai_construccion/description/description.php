<?php include("../src/includes/descriptionHeader.php")?>
<?php include("../src/config/conexion.php") ?>

<?php 
    session_start();

    if(isset($_SESSION['idUser'])){
        $idUser = $_SESSION['idUser'];

        $records = "SELECT * FROM users WHERE idUser = $idUser";
        $query = mysqli_query($conn, $records);
        $results =  mysqli_fetch_array($query);

        $recordsDescription = "SELECT * FROM descriptions WHERE idDescription = $idUser ";
        $queryDescription = mysqli_query($conn, $recordsDescription);
        $resultsDescription =  mysqli_fetch_array($queryDescription);

        $recordsImage = "SELECT * FROM images WHERE idIamge = $idUser ";
        $queryImage = mysqli_query($conn, $recordsImage);
        $resultsImage =  mysqli_fetch_array($queryImage);

        if(count($results)>0){
            $user = $results;
            if($resultsDescription != null){
                $description = $resultsDescription;
                if($resultsImage != null){
                    $images = $resultsImage;
                }
            }
        }
    }
?>

<div class="description">
    <div class="forms">
        <div class="imageFomrs">
            <form id="formFile" action="imageRespuesta.php" method="post" enctype="multipart/form-data">
                <?php if(!empty($images)): ?>
                    <img class="icono" src="data:image/png||jpg;base64,<?php echo base64_encode($images['archiveImage']); ?>" alt="fotoPerfil">
                <?php else: ?>
                    <img class="icono" src="../src/images/fotoPerfil/defecto.svg" alt="fotoPerfil">
                <?php endif; ?>
                <br/>
                <input type="file" name="image" class="imageFile"/>
                <br/>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

            <?php if(!empty($user)): ?>
                <input class="form-control get" type="text" value="<?= $user['userName'] ?>" aria-label="Nombre" disabled readonly>
                <input class="form-control get" type="text" value="<?= $user['userNick'] ?>" aria-label="Nickname" disabled readonly>
            <?php endif; ?>
        </div>

        <form id="formPost" action="descriptionRespuesta.php" method="post">
        <?php if($user['idDescription'] == null): ?>
            <div class="mb-3">
                <textarea class="form-control descriptionText" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
            </div>
            <input type="text" name="favoriteAnime" class="form-control" id="floatingInput" placeholder="favoriteAnime">
        <?php else: ?>
            <div class="mb-3">
                <textarea class="form-control descriptionText" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="<?= $description['description'] ?>"></textarea>
            </div>
            <input type="text" name="favoriteAnime" class="form-control" id="floatingInput" placeholder="<?= $description['favoriteAnime'] ?>">
        <?php endif; ?>
        </form>
    
    </div>
    <hr>
    <div class="buttons">
        <button type="submit" form="formPost" class="btn btn-primary">Guardar</button>
        <a href="logout.php" class="btn btn-primary">Salir</a>
        <a class="btn btn-danger" href="respuestaEliminarUser.php?idUser=<?php echo $idUser?>">Eliminar</a>
    </div>
</div>

