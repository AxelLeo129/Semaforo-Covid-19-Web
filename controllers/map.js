let table;
let data;
$(function () {
  axios.get('https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=0&pp=6&{}').then(res => {
    console.log(res);
    data = res.data;
  });
});

$(document).ready(function () {
  table = $('#example').DataTable({
    "ajax": {
      "url": "https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=0&pp=6&{}",
      "dataSrc": ""
    },
    "responsive": true,
    "columns": [{
        "data": "DEPARTAMENTO"
      },
      {
        "data": "MUNICIPIO"
      },
      {
        "data": "POBLACION"
      },
      {
        "data": "TOTAL_TAMIZAJES"
      },
      {
        "data": "CASOS_CONFIRMADOS"
      },
      {
        "data": "POSITIVIDAD"
      },
      {
        "data": "PUNTAJE_TESTEO"
      },
      {
        "data": "PUNTAJE_PRUEBAS_POSITIVAS"
      },
      {
        "data": "PUNTAJE_TOTAL"
      }
    ],
    "rowCallback": function (row, data, index) {
      if (data.POSITIVIDAD >= 20) {
        $('td', row).css('background-color', 'Red');
      } else if (data.POSITIVIDAD < 20 && data.POSITIVIDAD >= 15) {
        $('td', row).css('background-color', 'Orange');
      } else if (data.POSITIVIDAD < 15 && data.POSITIVIDAD >= 5) {
        $('td', row).css('background-color', 'Yellow');
      } else {
        $('td', row).css('background-color', 'Green');
      }
    },
    "language": {
      "info": "Registros encontrados: _TOTAL_",
      "search": "Buscar: ",
      "paginate": {
        "next": "Siguiente",
        "previous": "Anterior",
        "first": "",
        "last": ""
      },
      "lengthMenu": 'Mostrar <select>' +
        '<option value="10">10</option>' +
        '<option value="25">25</option>' +
        '<option value="50">50</option>' +
        '<option value="100">100</option>' +
        '<option value="-1">Todos</option>' +
        '</select> registros.',
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "emptyTable": "No hay datos.",
      "infoEmpty": "Mostrando 0 de 0 registros",
      "zeroRecords": "No hay concidencias.",
      "infoFiltered": ""
    }
  });
});

function displayInfo(e, index) {
  setTimeout(function () {
    let borde = document.getElementById('border');
    let title = document.getElementById('titulo_departamento');
    let titulo = document.getElementById('titulo_departamento');
    let poblacion = document.getElementById('poblacion');
    let pruebas_positivas = document.getElementById('pruebas_positivas');
    let testeo = document.getElementById('testeo');
    let total = document.getElementById('total');
    let clase = "";
    if (data[index].POSITIVIDAD >= 20)
      clase = "danger";
    else if (data[index].POSITIVIDAD < 20 && data[index].POSITIVIDAD >= 15)
      clase = 'secondary';
    else if (data[index].POSITIVIDAD < 15 && data[index].POSITIVIDAD >= 5)
      clase = 'warning';
    else
      clase = 'success';

    borde.className = "card mb-3 border-" + clase;
    title.className = "card-header font-weight-bold bg-" + clase;
    titulo.innerHTML = data[index].DEPARTAMENTO;
    poblacion.innerHTML = "Población: " + data[index].POBLACION;
    pruebas_positivas.innerHTML = "Pruebas positivas: " + data[index].PUNTAJE_PRUEBAS_POSITIVAS;
    testeo.innerHTML = "Testeo: " + data[index].PUNTAJE_TESTEO;
    total.innerHTML = "Total: " + data[index].PUNTAJE_TOTAL;

    var left = e.pageX;
    var top = e.pageY;
    var theHeight = $('.popover').height();
    $('.popover').show();
    $('.popover').css('left', (left + 10) + 'px');
    $('.popover').css('top', (top - (theHeight / 2) - 10) + 'px');
  }, 500);
}

function dismissPopover() {
  let popover_principal = document.getElementById('popover_principal');
  popover_principal.style = "display: none !important";
}

async function getData(departamento) {
  table.ajax.url('https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=' + departamento + '&pp=5&{}').load();
}