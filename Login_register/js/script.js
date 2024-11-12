const $btnSignIn = document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn = document.querySelector('.sign-in'),
      $continueBtn = document.querySelector('#continue-btn'),
      $formPart1 = document.querySelector('#form-part-1'),
      $formPart2 = document.querySelector('#form-part-2');

// Manejar el cambio de formularios de inicio de sesión y registro
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active');
    }
});

// Validar y mostrar la segunda parte del formulario al hacer clic en "Continuar"
$continueBtn.addEventListener('click', () => {
    const inputsPart1 = $formPart1.querySelectorAll('input, select');
    let allFilled = true;

    // Comprobar cada input
    inputsPart1.forEach(input => {
        if (!input.checkValidity()) {
            allFilled = false;
            input.reportValidity(); // Mostrar el mensaje de error nativo del navegador
        }
    });

    if (allFilled) {
        // Ocultar la primera parte y mostrar la segunda
        $formPart1.style.display = 'none';
        $formPart2.style.display = 'grid';
    } else {
        alert('Por favor, complete todos los campos requeridos antes de continuar.');
    }
});

// Control de validación del número de identificación
document.getElementById('tipo-identificacion').addEventListener('change', function() {
    const tipoIdentificacion = this.value;
    const inputNumero = document.getElementById('numero-identificacion');
    
    if (tipoIdentificacion === 'DNI') {
        inputNumero.maxLength = 8;
        inputNumero.setAttribute('max', '99999999');
        inputNumero.placeholder = 'Número de Identificación (8 cifras)';
    } else if (tipoIdentificacion === 'Carnet de Extranjería') {
        inputNumero.maxLength = 12;
        inputNumero.removeAttribute('max');
        inputNumero.placeholder = 'Número de Identificación (hasta 12 cifras)';
    } else if (tipoIdentificacion === 'Pasaporte') {
        inputNumero.maxLength = 9;
        inputNumero.removeAttribute('max');
        inputNumero.placeholder = 'Número de Identificación (hasta 9 cifras)';
    }
});
