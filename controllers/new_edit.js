(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        let nombre = document.getElementById('nombre');
        let descripcion = document.getElementById('descripcion');
        let normas = document.getElementById('normas');
        let url = document.getElementById('url');
        let departamento_id = document.getElementById('departamento_id');
        let municipio_id = document.getElementById('municipio_id');
        let logo = document.getElementById('logo');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity() === false) {
                    form.classList.add('was-validated');
                } else {
                    $.ajax({
                        url: '../configuration/save.php',
                        type: 'POST',
                        datatype: 'json',
                        data: {
                            nombre: nombre.value,
                            descripcion: descripcion.value,
                            normas: normas.value,
                            descripcion: descripcion.value,
                            url: url.value,
                            departamento_id: departamento_id.value,
                            municipio_id: municipio_id.value,
                            logo: logo.value
                        },
                        success: function (data) {
                            console.log(data);
                            location.href = "/semaforo-covid-web/views/places.php";
                        }
                    })
                }
            }, false);
        });
    }, false);
})();