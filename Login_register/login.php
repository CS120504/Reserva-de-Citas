<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-complatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" href="./css/login.css?v=1.1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="fondo"> </div>
        <div class="wrapper">
            <form action="" method="post">
                <h1>Iniciar Sesion</h1>
                <div class="input-box">
                    <input type="text" placeholder="Usuario" required >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcZJREFUSEuNVoFxwyAMfG3iTFJ7k2SSJpOkm8SbOJ2EGhBGQlId3zUhGJD0/3pKcB8CISGVdwTw6FjqTMlj5Os8dp74hPKGP3oS+ng5rwJExxIwJeAbwHX/ewNY99IePO51msAZCfH0ADyqXzOAV12mUsiBbiCsB4IjNgkgM2cXbQAmj4pSAeESUzRU4HB6BehZSHYyYawXgFazhpGpEClEFBj3HaSMvVjegh1Ke+wH3I3S2o6uCpeNGaBXtJmTuyHhJ0z0RNITB9Ac9E2Z6IsuUJ9oSdZgZPxmIL0CkpemokCBLFMHp4HT1gczzxeJEvCu3e5QxJipCsxa2TjnSYxqLeoRjSb9R7vHPx2ue0wmcSQ31ierJdyR8EXArKCoa5pl/O4/spwdXyTdyX0RzYT0TLmDbYd5KVXbKB6lm0p5Ee/s3nPimr0/DhAXNsKehMGXsCHRZKz4pGH4xNIXo6tIFAZr0GSPMAcu8Ngrq5wwLTLAE4RrvlGiy6Sb2tCx/d5bCVjabSj6oBy6JcLkCPrIR16lZWykiTcBl6a6kWRHjRamwDakgMgJ4JTs2LjjDP4/BoqDj5OMIsbzoReZmJ/JtG9jbv4APnnLIpcp3zwAAAAASUVORK5CYII="/>                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" required>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
                </div>
                <div class="remember-forgot">
                        <label><input type="checkbox" required>Recordar Contraseña</label>
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </div>
                <div>
                <button type="summit" class="btn">Iniciar Sesion</button>
               </div>
                 <div class="dont-account">
                    <p>¿No tienes una cuenta? <a href="../Login_register/register.php">Registrarse</a></p>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
require "footer.php"
?>