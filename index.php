<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ianca Silva">
    <meta name="description" content="Meu nome é Ianca Silva, desenvolvo interfaces modernas e de alta qualidade, concentrado em performance, animações, responsividade e SEO">
    <meta name="keywords" content="sites, web, desenvolvimento, frontend, programador, programadora, landingpage, freelancer, freela, website, portfólio">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://iancasilva.com.br/assets/img/preview.webp">
    <meta property="og:title" content="Portfólio | Ianca Silva">
    <meta property="og:description" content="Portfólio | Ianca Silva">

    <title>Portfólio | Ianca Silva</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        if (document.addEventListener) {
            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
                return false;
            });
        } else { //Versões antigas do IE
            document.attachEvent("oncontextmenu", function(e) {
                e = e || window.event;
                e.returnValue = false;
                return false;
            });
        }
    </script>
</head>

<body onkeydown="return false">

    <header id="header">
        <div id="logo">
            <a href="index.php">
                <img src="assets/img/logo.svg" alt="Logo Ianca Silva">
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Ínicio</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">Sobre mim</a></li>
                <li><a class="nav-link scrollto" href="index.php#services">Serviços</a></li>
                <li><a class="nav-link scrollto" href="index.php#skills">Conhecimentos</a></li>
                <li><a class="nav-link scrollto" href="index.php#projects">Projetos</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </header>

    <main>
        <section id="home" class="home">
            <div class="container">
                <div class="row" id="home-container">
                    <div class="col-lg-8 col-md-6">
                        <div id="home-container-text">
                            <h1>Ajudo empresas a destacarem seu negócio no <span>mundo digital</span>
                                de forma moderna e de alta qualidade.
                            </h1>
                            <p class="anim">Coloque sua empresa na avenida mais movimentada da internet (o Google).</p>
                            <a href="https://www.instagram.com/iancadev/" target="_blank" type="submit">Instagram</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/logo-home.svg" alt="" id="home-logo" width="500px" height="500px">
                    </div>
                </div>
            </div>
        </section>

        <div id="about" class="about">
            <div class="container">
                <div class="row" id="about-container">
                    <div class="col-lg-6 col-md-6">
                        <div id="about-logo">
                            <img src="assets/img/iancasilva.webp" alt="" id="iancasilva" width="400px" height="400px">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <article id="about-container-text">
                            <h2>Quem sou
                                <span>.</span>
                            </h2>
                            <p>
                                Meu nome é Ianca Silva. Trabalho como Web Developer Freelancer.
                                Desenvolvo interfaces modernas e de alta qualidade, concentrado em performance,
                                animações, responsividade e SEO.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <section id="services" class="services">
            <div class="container">
                <article id="section-title">
                    <h2>Serviços
                        <span>.</span>
                    </h2>
                </article>
                <div class="row" id="services-container">
                    <div class="col-lg-4 col-md-6">
                        <article class="services-box">
                            <picture>
                                <img src="assets/img/icon/icon-design.svg" width="100px" height="100px" alt="icon layout">
                            </picture>
                            <h3>UI Design</h3>
                            <p>
                                Interface de forma clara e objetiva afim de
                                trazer a melhor experiência para o usuário.
                            </p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="services-box">
                            <picture>
                                <img src="assets/img/icon/icon-codigo.svg" width="100px" height="100px" alt="icon código">
                            </picture>
                            <h3>Desenvolvimento</h3>
                            <p>
                                Desenvolvo sites, landing pages, blogs, e portfólios.
                            </p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="services-box">
                            <picture>
                                <img src="assets/img/icon/icon-mobile.svg" width="100px" height="100px" alt="icon imagem">
                            </picture>
                            <h3>Responsividade</h3>
                            <p>
                                Um design responsivo torna seu site acessível a todos
                                os usuários, independentemente do dispositivo.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="skills">
            <div class="container">
                <article id="section-title">
                    <h2>Conhecimentos
                        <span>.</span>
                    </h2>
                </article>

                <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
                    <div class="col">
                        <div class="card-skills">
                            <span>HTML5</span>
                            <img src="assets/img/skills/html.svg" alt="HTML">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-skills">
                            <span>CSS3</span>
                            <img src="assets/img/skills/css.svg" alt="CSS">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-skills">
                            <span>JavaScript</span>
                            <img src="assets/img/skills/javascrip.svg" alt="JavaScript">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-skills">
                            <span>Bootstrap</span>
                            <img src="assets/img/skills/bootstrap.svg" alt="Boostrap">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-skills">
                            <span>React</span>
                            <img src="assets/img/skills/react.svg" alt="React js">
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-skills">
                            <span>PHP</span>
                            <img src="assets/img/skills/php.svg" alt="PHP">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="projects">
            <div class="container">
                <article id="section-title">
                    <h2>Projetos
                        <span>.</span>
                    </h2>
                </article>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="card-projects">
                            <h3>Em breve</h3>
                            <p>
                                Sente-se e tome um café, ainda estou desenvolvendo o projeto
                                e em breve estará aqui.
                            </p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card-projects">
                            <h3>Em breve</h3>
                            <p>
                                Sente-se e tome um café, ainda estou desenvolvendo o projeto
                                e em breve estará aqui.
                            </p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <article class="card-projects">
                            <h3>Em breve</h3>
                            <p>
                                Sente-se e tome um café, ainda estou desenvolvendo o projeto
                                e em breve estará aqui.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>
                            © 2022 iancasilva.com.br |
                            Criado e desenvolvido por:
                            <img src="assets/img/logo-footer.png" alt="logo ianca silva" width="35px" height="35px"></a>
                        </p>
                    </div>
                </div>
            </div>

        </footer>
    </main>
</body>







<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
    function typeWriter(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
            setTimeout(() => elemento.innerHTML += letra, 75 * i);
        });
    }

    // Se estiver tendo problemas com performance, utilize o FOR loop como abaixo no local do forEach
    // function typeWriter(elemento) {
    //   const textoArray = elemento.innerHTML.split('');
    //   elemento.innerHTML = '';
    //   for(let i = 0; i < textoArray.length; i++) {
    //     setTimeout(() => elemento.innerHTML += textoArray[i], 75 * i);
    //   }
    // }

    const paragrafo = document.querySelector('p');
    typeWriter(paragrafo);
</script>


</html>