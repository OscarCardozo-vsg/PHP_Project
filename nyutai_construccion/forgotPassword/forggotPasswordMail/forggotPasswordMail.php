<?php include("../../src/includes/forgotPasswordHeader.php")?>

<div class="forgotPassword">
    <p class="title">Olvidaste tu contraseña?</p>
    <hr>
    <div class="formularios">
        <form id="correo" action="emailRespuesta.php" method="post">
            <p>No te preocupes, es normal olvidar la contraseña, ten más cuidado la próxima vez, por ahora danos tu correo para poder restaurar tu contraseña:</p>
            <div class="form-floating">
                <input type="email" required name="email" required class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo</label>
            </div> 
            <br> 
            <button type="submit" class="w-100 btn btn-info">Recuperar</button>
        </form>
    </div>
</div>      

