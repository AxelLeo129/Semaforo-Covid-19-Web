async function getData(departamento) {
    axios.get('https://sistemaalertacovid-19.segeplan.gob.gt//covid-19/Datos.ashx?term=' + departamento + '&pp=5&{}').then((res) => {
        console.log(res.data);
    }).catch((err) => {
        console.log(err);
    });
}