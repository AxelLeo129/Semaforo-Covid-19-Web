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
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    if (pass.value != conf.value) {
                        event.preventDefault();
                        event.stopPropagation();
                        pass.value = "";
                        conf.value = "";
                        Swal.fire({
                            icon: 'warning',
                            title: '¡Atención!',
                            text: 'Las contraseñas no coinciden.',
                        });
                    }
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();