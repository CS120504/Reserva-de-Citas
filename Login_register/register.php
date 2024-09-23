<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/register.css?v=1.1">
</head>
<body>
    <div class="fondo"> </div>
    <div class="wrapper">
        <form action="../Login_register/procesos.php" class="login" method="post">
            <h1>Registrarse</h1>
            <div class="input-box">
                <input type="text" placeholder="Nombre" required class="input-register" id="user" name="user">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcZJREFUSEuNVoFxwyAMfG3iTFJ7k2SSJpOkm8SbOJ2EGhBGQlId3zUhGJD0/3pKcB8CISGVdwTw6FjqTMlj5Os8dp74hPKGP3oS+ng5rwJExxIwJeAbwHX/ewNY99IePO51msAZCfH0ADyqXzOAV12mUsiBbiCsB4IjNgkgM2cXbQAmj4pSAeESUzRU4HB6BehZSHYyYawXgFazhpGpEClEFBj3HaSMvVjegh1Ke+wH3I3S2o6uCpeNGaBXtJmTuyHhJ0z0RNITB9Ac9E2Z6IsuUJ9oSdZgZPxmIL0CkpemokCBLFMHp4HT1gczzxeJEvCu3e5QxJipCsxa2TjnSYxqLeoRjSb9R7vHPx2ue0wmcSQ31ierJdyR8EXArKCoa5pl/O4/spwdXyTdyX0RzYT0TLmDbYd5KVXbKB6lm0p5Ee/s3nPimr0/DhAXNsKehMGXsCHRZKz4pGH4xNIXo6tIFAZr0GSPMAcu8Ngrq5wwLTLAE4RrvlGiy6Sb2tCx/d5bCVjabSj6oBy6JcLkCPrIR16lZWykiTcBl6a6kWRHjRamwDakgMgJ4JTs2LjjDP4/BoqDj5OMIsbzoReZmJ/JtG9jbv4APnnLIpcp3zwAAAAASUVORK5CYII="/>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Correo Electrónico" required class="input-register" id="email" name="email">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAdJJREFUSEuVVdlhwjAMfd6EbpJuQieBTgJM0mxSNnGjw/GTj0DzlciH9A4pCfuTkJCR9Tu+w6O0VUMJdaW+x6h8DXbyplpCTDDYMwnNSolxv32cOkYZjSHoaOGqnS495Ue7LDPEcrYmWIB8Q8Jpp3xw3yF5tvgE8AVgVS3pwM8WXAqaquJ7XDdKSZIPlZeOm4GA762OSySp8REjiyjvQDqrG5XZQFFgWJDcAJxiZWzf4AGjJWHdna7LUYPsdRZd5PLzjmbO1F0u92U580uGc5Ft1TyS8ETGY9t0tU5KS0K+ZUUTEFDVGl8yIDpWWzYilyYuhIsWV+/D05b4vBVh2iTckdUp8ijSBFwaFysTZNM4DxyyVPnY3q/ugMXjZkGpOuHHFR0MlGJTp6ixGn8yGrmoq3rgOhOZ2rqI7CwUpvYdBc1qXA+8yhPB5AqdTAkO+5VV3J3RTdxg0xlFL+YCj/eu8wuCQSd3UhCN9gd4YyAVA5mLGIE3Q61uJv2LGdVroE3iw456MZibL40JmnQrgM86KmxVLpdGiknCD++F+LZM47pM05njGsM2oyJOhbbNeCD1LHPGcQu1P6UjpQZr/+iDDmXUj2fRwaQoQsyQuREHHvgDCljSJYcCBp0AAAAASUVORK5CYII"/>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required class="input-register" id="pass" name="password">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirmar Contraseña" required class="input-register" id="confirm_password" name="confirm_password">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox" required>
                    <p>Acepto los <a href="../Login_register/terms.html">Términos y Condiciones</a>
                    </p>
                </label>
            </div>
            <div>
                 <button type="summit" class="btn">Registrarse</button>
            </div>
            <div class="dont-account">
                    <p>¿Tienes una cuenta? <a href="../Login_register/register.php">Inicar Sesión</a></p>
            </div>
         </form>
    </div>
</body>
</html>

<?php
require 'footer.php'
?>