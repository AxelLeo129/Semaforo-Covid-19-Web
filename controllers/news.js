$(function () { 
    let fecha = new Date();
    axios.get('http://newsapi.org/v2/everything?q=covid-19&from='+ fecha.getFullYear() +'-' + (fecha.getMonth() + 1) + '-' + fecha.getDate() + '&sortBy=publishedAt&language=es&apiKey=de2ec1a1db054cae82235aabeb58c31c').then(res => {

        let noticas_importantes = res.data.articles.slice(0, 3);
        let noticias_restantes = res.data.articles.slice(4, 10);

        let ol = document.getElementById('slides_function');
        let slides = document.getElementById('slides');
        let cards = document.getElementById('news_row');

        for(let i = 0; i < noticas_importantes.length; i++) {
            let active = "";
            if(i == 0)
                active = "active";
            let slide_ops = `<li data-target="#carouselExampleCaptions" data-slide-to="${ i }"></li>`;
            let slide = `<div class="carousel-item ${ active }">
                            <a href="${ noticas_importantes[i].url }" target="_blank">
                                <img src="${ noticas_importantes[i].urlToImage }" class="d-block w-100 img-news" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="h4-news">${ noticas_importantes[i].title }</h4>
                                    <p class="p-new">${ noticas_importantes[i].content }</p>
                                </div>   
                            </a>   
                        </div>`;    

            ol.innerHTML += slide_ops;
            slides.innerHTML += slide;
        }

        for(let i = 0; i < noticias_restantes.length; i++) {
            let card = `<div class="col-lg-4 col-md-6 mb-4">
                            <a href="${ noticias_restantes[i].url }" target="_blank">
                                <div class="view overlay z-depth-1-half">
                                    <img src="${ noticias_restantes[i].urlToImage }" class="img-fluid img-cards" alt="">
                                <div class="mask rgba-white-slight"></div>
                                <h4 class="my-4 font-weight-bold h4-news" style="color: black;">${ noticias_restantes[i].title }</h4>
                                <p class="p-new" style="color: black;">${ noticias_restantes[i].content }</p>
                                <p style="color: black;">por <strong>${ noticias_restantes[i].author }</strong>, ${ new Date(noticias_restantes[i].publishedAt).toLocaleDateString() }</p>
                            </a>   
                        </div>`;
            cards.innerHTML += card;
        }

    });
});