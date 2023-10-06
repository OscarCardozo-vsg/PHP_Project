<?php include("../src/includes/header.php")?>

<div class="register">
    <div class="title">Registrate</div>
    <hr/>
    <form action="registerRespuesta.php" method="post">
      <div class="user-details">
        <div class="form-floating">
          <input type="text" name="userNick" required class="form-control" id="floatingInput" placeholder="Usuario">
          <label for="floatingInput">Usuario</label>
        </div>

        <div class="form-floating">
          <input type="text" name="personName" required class="form-control" id="floatingInput" placeholder="Nombre">
          <label for="floatingInput">Nombre completo</label>
        </div>

        <div class="form-floating">
          <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Correo</label>
        </div>

        <div class="form-floating">
          <input type="date" name="birthDate" required class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingDate">Fecha de nacimiento</label>
        </div>

        <div class="form-floating">
          <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Contraseña</label>
        </div>
      </div>
      <div class="genero">
        <input type="radio" required value="0" name="gener" id="bottom-1">
        <input type="radio" required value="1" name="gener" id="bottom-2">
        <input type="radio" required value="2" name="gener" id="bottom-3">
        <div class="categoria">
          <span class="gener-title">Genero:</span>
          <label for="bottom-1">
            <span class="check-bottom one"></span>
            <span class="genero">Mujer</span>
          </label>
          <label for="bottom-2">
            <span class="check-bottom two"></span>
            <span class="genero">Hombre</span>
          </label>
          <label for="bottom-3">
            <span class="check-bottom three"></span>
            <span class="genero">Otro</span>
          </label>
        </div>
      </div>

      <hr>
      <button type="submit" class="w-100 btn btn-dark btn-login">Registrar</button>
      <hr style="margin-top: 0; margin-bottom: 5px; opacity: 0;">
      <a class="go-login"  href="../login/login.php">¿Ya tienes cuenta? Inicia sesion</a>
    </form>
  </div>

