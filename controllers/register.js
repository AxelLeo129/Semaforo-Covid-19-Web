(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        let pass = document.getElementById('pass');
        let conf = document.getElementById('conf');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity() === false) {
                    form.classList.add('was-validated');
                } else {
                    if (pass.value != conf.value) {
                        pass.value = "";
                        conf.value = "";
                        form.classList.add('was-validated');
                        sweetAlert('¡Atención!', 'Las contraseñas no coinciden.');
                    } else {
                        let email = document.getElementById('email');
                        $.ajax({
                            url: '../configuration/signup.php',
                            type: 'POST',
                            datatype: 'json',
                            data: {
                                email: email.value,
                                password: pass.value
                            },
                            success: function(data) {
                                console.log(data);
                                if(data == "null") {
                                    email.value = "";
                                    conf.value = "";
                                    pass.value = "";
                                    form.classList.add('was-validated');
                                    sweetAlert('¡Atención!', 'Este email ya está registrado.');
                                } else { 
                                    location.href = "/semaforo-covid-web/views/new_edit.php";
                                }
                            }
                        })
                    }
                }
            }, false);
        });
    }, false);
})();

function navigateToLogin() {
    location.href = "/semaforo-covid-web/views/login.php";
}

function sweetAlert(title, text) {
    Swal.fire({
        icon: 'warning',
        title,
        text,
    });
}