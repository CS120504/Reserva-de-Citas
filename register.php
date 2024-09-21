<?php 
require 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <div class="wrapper">
        <form action="" class="login">
            <h1>Registrarse</h1>
            <div class="input-box">
                <input type="text" placeholder="Nombre" required class="input-register">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAfdJREFUSEu11UuoSFEUBuDvkphgIKG8ihCFgVAyQiEjjzEppZCipDBBjL1CKY+ZIlEiSYkMiJIByiMGSJJMGHidpXNq2519T13dPdtn/Xv9a+317//06OfV08/5dREMwkosw2xMrAt6jUe4jkv4USq0N4LFOIFJHV0+w0bcbsOVCHZhH50dNjl/YjsO5SRtBHuwt4+z2YKj6dmcYAlu9DF5HPtVzWU+HjQ5UoIBeILpLQRfsBOX69hqHMDQFuxdLGwjCLVcLFS/Dmez2Kb8OpL4AtyLfdrBhaqDVQWCkfiUxcbgXQF/GFtzgrcYVzgwCh+z2Gi8L+AfYk5O8A1DCgfW43QWC+0fL+A/Y0RO8LUwtMDFkHfUQw4xxLwOYliBIHINzwmeY8p/SDQ9+rRRYzrkM1jbQhDafoz7lSV8qONx/3MrH5pVPcroKF+nsCHvYDmuZsjoagVeFDqbhmuJCTawRbiVE8Q+Kp1Zo35jMl51XNtUhOE1Kzqd12xyqwjmmwn4POKRfS+QhOrOYU0dj+uMV/z3kbV1EN/CSfcnCd9UkjtS+39YyUDMqHUe5jY2wW7GsbSYkl3vrh2164fU5Aq73oZ4wf+s3hIsxUmM75hBCCEUc6cN11Xh4NqfQmEx/AmI4b9E2EEo6Aqig9bVRdBRfHe43wn+AAntVBlfO442AAAAAElFTkSuQmCC"/>
            </div>
            <div class="input-box">
                <input type="e-mail" placeholder="Correo Electrónico" required class="input-register">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAdJJREFUSEuVVdlhwjAMfd6EbpJuQieBTgJM0mxSNnGjw/GTj0DzlciH9A4pCfuTkJCR9Tu+w6O0VUMJdaW+x6h8DXbyplpCTDDYMwnNSolxv32cOkYZjSHoaOGqnS495Ue7LDPEcrYmWIB8Q8Jpp3xw3yF5tvgE8AVgVS3pwM8WXAqaquJ7XDdKSZIPlZeOm4GA762OSySp8REjiyjvQDqrG5XZQFFgWJDcAJxiZWzf4AGjJWHdna7LUYPsdRZd5PLzjmbO1F0u92U580uGc5Ft1TyS8ETGY9t0tU5KS0K+ZUUTEFDVGl8yIDpWWzYilyYuhIsWV+/D05b4vBVh2iTckdUp8ijSBFwaFysTZNM4DxyyVPnY3q/ugMXjZkGpOuHHFR0MlGJTp6ixGn8yGrmoq3rgOhOZ2rqI7CwUpvYdBc1qXA+8yhPB5AqdTAkO+5VV3J3RTdxg0xlFL+YCj/eu8wuCQSd3UhCN9gd4YyAVA5mLGIE3Q61uJv2LGdVroE3iw456MZibL40JmnQrgM86KmxVLpdGiknCD++F+LZM47pM05njGsM2oyJOhbbNeCD1LHPGcQu1P6UjpQZr/+iDDmXUj2fRwaQoQsyQuREHHvgDCljSJYcCBp0AAAAASUVORK5CYII"/>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required class="input-register">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirmar Contraseña" required class="input-register">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
            </div>
            <div>
                 <button type="summit" class="btn">Registrarse</button>
            </div>
         </form>
    </div>
</body>
</html>

<?php
require 'footer.php'
?>