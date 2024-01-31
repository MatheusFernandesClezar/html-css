<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Meu</title>
</head>
<body>
    <div class="Container">
    <header>
        <div class="navbar">
            <div class="logo">
                <svg width="200" height="85" viewbox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M112.5 75L100 80L100 75H112.5Z" fill="#1B1919"/>
                    <path d="M0 0H100V80H0V40.7207V20.5405V0Z" fill="#1B1919"/>
                    <path d="M23 11H28.5474L50.0433 32.7026L71.4526 11H77V64H68.3323V23.6408L65.7753 26.6868L50.0433 42.7924L34.3114 26.7249L31.6677 23.6789V64H23V11Z" fill="white"/>
                </svg>
            </div>
        <nav>
            <ul id="menuList">
                <li><a href="#Sobre">Sobre</a></li>
                <li><a href="#Capacitações">Capacitações</a></li>
                <li><a href="#Projetos">Projetos</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <div id="Sobre" class="Me">
        <div class="profile">
            <img src="img/profile2.jpg">
        </div>
        <div class="name">
            <p> Matheus Fernandes Clezar </p>
        </div>
        <div class="AboutMe">
            <h1>SOBRE MIM</h1>
            <p>Meu nome é Matheus, tenho 21 anos e moro em Arroio do Sal Rio Grande do Sul, comecei a faculdade de Sistema de Informação no 1 semestre de 2020 e desde então venho criando um gosto por aprender mais sobre. <br> Nesse período comecei a aprender a programar junto com alguns amigos e isso só reforçou a vontade do aprendizado que eu tenho sobre esse universo da programação. Criei esse site para ir atualizando com as coisas que eu aprendi e com cursos que eu for fazendo no caminho. </p>
        </div>
    </div>
        <div id="Capacitações" class="Skills">
         <div class="HtmlCssJava">
            <div class="html">
                <img src="img/HTML.PNG">
            </div>
            <div class="css">
                <img src="img/CSS.PNG">
            </div>
            <div class="javascript">
                <img src="img/JAVASCRIPT.PNG">
            </div>
         </div>
         <div class="SkillsDescription">
            <h1>CAPACITAÇÕES</h1>
            <p id="hoverToSee"> ◀ Passe o mouse sobre os tópicos ao lado.</p>
            <p id="htmlDesc"> HTML Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus dicta iure minima mollitia nihil eligendi tempora, explicabo debitis ut molestias nulla laborum. Reprehenderit repellendus ad tenetur dolorem aut dolores.</p>
            <p id="cssDesc"> CSS Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ipsam corporis, doloremque itaque, porro eius assumenda neque fugit a laboriosam in illum eligendi animi quod fuga magnam pariatur architecto unde?</p>
            <p id="javascriptDesc"> JAVASCRIPT Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis necessitatibus, officia sapiente maiores facere incidunt a, quo illum voluptates exercitationem ex minima dolores, ullam fugit laborum repudiandae molestias libero?</p>
         </div>
        </div>
        <div id="Projetos" class="Projects">
                <div class="project1">
                    <a href="https://matheusfernandesclezar.github.io/html-css/Site%20do%20Android%20-%20Desafio%2010/android.html" target="_blank"> <img src="img/siteAndroid.PNG"> </a>
                </div>
                <div class="PROJETOS">
                      <h1>PROJETOS</h1>
                    <div class="project2">
                        <a href="https://matheusfernandesclezar.github.io/html-css/Estilo%20Netflix/home.html" target="_blank"> <img src="img/siteNetflix.PNG"> </a>
                    </div>
                </div>
                <div class="project3"></div>
        </div>
    </div>
    <script>
        const Desc = document.querySelector('.SkillsDescription');
        const ToSee = document.querySelector('#hoverToSee');
        const htmlImg = document.querySelector('.html');
        const htmlDesc = document.querySelector('#htmlDesc');
        const cssImg = document.querySelector('.css');
        const cssDesc = document.querySelector('#cssDesc');
        const javascriptImg = document.querySelector('.javascript');
        const javascriptDesc = document.querySelector('#javascriptDesc')


        htmlImg.onmouseover = function(){
            htmlDesc.classList.add('active');
            if (cssDesc.classList = 'active')
            cssDesc.classList.remove('active');
            if (javascriptDesc.classList = 'active')
            javascriptDesc.classList.remove('active');
            if (htmlDesc.classList = 'active')
            ToSee.classList.add('active');
        }
        cssImg.onmouseover = function(){
            cssDesc.classList.add('active');
            if (htmlDesc.classList = 'active')
            htmlDesc.classList.remove('active');
            if (javascriptDesc.classList = 'active')
            javascriptDesc.classList.remove('active');
            if (cssDesc.classList = 'active')
            ToSee.classList.add('active');
        }
        javascriptImg.onmouseover = function(){
            javascriptDesc.classList.add('active');
            if (cssDesc.classList = 'active')
            cssDesc.classList.remove('active');
            if (htmlDesc.classList = 'active')
            htmlDesc.classList.remove('active');
            if (javascriptDesc.classList = 'active')
            ToSee.classList.add('active');
        }


    </script>
</body>
</html>
