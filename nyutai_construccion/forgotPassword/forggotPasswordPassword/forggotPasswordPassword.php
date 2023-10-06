<?php include("../../src/includes/forgotPasswordHeader.php")?>

<div class="forgotPassword">
    <p class="title">Olvidaste tu contraseña?</p>
    <hr>
    <div class="formularios">
        <form id="contraseña" action="passwordRespuesta.php" method="post">
            <p>Ya casi esta, ahora coloca tu nueva contraseña:</p>       
            <div class="form-floating">
                <input type="password" required name="password" class="form-control password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>  
            <br> 
            <button type="submit" for="register" class="w-100 btn btn-dark btn-register" onclick="location.href='../register/register.php'">Recuperar</button>
        </form>
    </div>
</div>      