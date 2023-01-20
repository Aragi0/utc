<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Inicar Sesion</h2>
            <div class="input-field"><!---aca es la barra de escritura del texto-->
              <i class="fas fa-user"></i><!---icono de texto-->
              <input type="text" placeholder="Username" /><!--aca se escribe-->
            </div>
            <div class="input-field"><!---aca es la barra de escritura de la contraseña-->
              <i class="fas fa-lock"></i><!---icono de contraseña-->
              <input type="password" placeholder="Password" /><!--aca se escribe-->
            </div>
            <input type="submit" value="Login" class="btn solid" /><!--Bottom-->
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrarase</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" /><!--aca se escibe-->
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" /><!--aca se escibe-->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" /><!--aca se escibe-->
            </div>
            <input type="submit" class="btn" value="Sign up" /><!--Bottom-->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes cuenta ?</h3>
            <p>
             Porfavor solicite su cuenta en este formulario
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registro
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tien cuenta ?</h3>
            <p>
              Porfavor drigase al Inico de sesion
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicar Sesion
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
