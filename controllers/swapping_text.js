// Wrap every letter in a span
$(function () {
    let descripcion = document.getElementById('descripcion');
    let contador = 0;
    let arreglo_funciones = ['CONTAGIOS', 'ÚLTIMAS NOTICIAS', 'ESTABLECIMIENTOS', 'MEDIDAS DE PRECAUCIÓN'];

    setInterval(function () {
        descripcion.innerHTML =  `<h4 class="ml11">
                                    Información sobre: <span class="text-wrapper">
                                                        <span class="line line1"></span>
                                                        <span class="letters">${ arreglo_funciones[contador] }</span>
                                                    </span>
                                </h4>`;

        if (contador == 3)
            contador = 0;
        else
            contador++;

            let textWrapper = document.querySelector('.ml11 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");
            
            anime.timeline({
                    loop: true
                })
                .add({
                    targets: '.ml11 .line',
                    scaleY: [0, 1],
                    opacity: [0.5, 1],
                    easing: "easeOutExpo",
                    duration: 700
                })
                .add({
                    targets: '.ml11 .line',
                    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                    easing: "easeOutExpo",
                    duration: 700,
                    delay: 100
                }).add({
                    targets: '.ml11 .letter',
                    opacity: [0, 1],
                    easing: "easeOutExpo",
                    duration: 600,
                    offset: '-=775',
                    delay: (el, i) => 34 * (i + 1)
                }).add({
                    targets: '.ml11',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });

    }, 3000);
});
