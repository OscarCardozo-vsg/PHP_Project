<?php include("../src/includes/header.php")?>

<div class="login">
  <form id="login" action="loginRespuesta.php" method="post">
    <img src="../src/images/icono_3.png" alt="Bienvenido" class="icono">
    <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>
    <div class="form-floating">
      <input type="email" required name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo</label>
    </div>

    <div class="form-floating">
      <input type="password" required name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <a href="../forgotPassword/forggotPasswordMail/forggotPasswordMail.php" class="forgot-password">¿Olvidaste la Contraseña?</a>

    <button type="submit" class="w-100 btn btn-info">Inicia Sesión</button>
    <button type="submit" for="register" class="w-100 btn btn-dark btn-register" onclick="location.href='../register/register.php'">Registrate</button>
  </form>
</div>