window.onload = async function () {
    axios.get("https://api.ipify.org/?format=json").then((res) => {
        const ip = res.data.ip;
        const llave_acceso = "fc1b8654bbec84703b6681bcecdf9d21";
        axios.get("http://api.ipstack.com/" + ip + "?access_key=" + llave_acceso).then((res) => {
            const departamento = res.data.region_name;
            getData(departamento);
        })
    });
}

async function getData(departamento) {
    axios.get('https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=' + departamento + '&pp=5&{}').then((res) => {
        //console.log(res, res.data);
    }).catch((err) => {
        console.log(err);
    });
}

$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": "data/arrays.txt"
    } );
} );