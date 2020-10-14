let table;
$(document).ready(function () {
  table = $('#example').DataTable({
    "ajax": {
      "url": "https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=0&pp=6&{}",
      "dataSrc": ""
    },
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

async function getData(departamento) {
  table.ajax.url('https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=' + departamento + '&pp=5&{}').load();
}