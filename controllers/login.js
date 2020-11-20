(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        let pass = document.getElementById('password');
        let email = document.getElementById('email');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity() === false) {
                    form.classList.add('was-validated');
                } else {
                    $.ajax({
                        url: '../configuration/signin.php',
                        type: 'POST',
                        datatype: 'json',
                        data: {
                            email: email.value,
                            password: pass.value
                        },
                        success: function (data) {
                            console.log(data, data == "null");
                            if (data == "null") {
                                pass.value = "";
                                form.classList.add('was-validated');
                                sweetAlert('¡Atención!', 'Correo o contraseña incorrectos.');
                            } else
                                location.href = "/semaforo-covid-web/views/places.php";
                        }
                    })
                }
            }, false);
        });
    }, false);
})();

function navigateToRegister() {
    location.href = "/semaforo-covid-web/views/register.php";
}

function sweetAlert(title, text) {
    Swal.fire({
        icon: 'warning',
        title,
        text,
    });
}