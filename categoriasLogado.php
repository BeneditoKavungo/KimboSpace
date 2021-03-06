<?php
//conexao com a base de dadps
require_once 'dbconnect.php';

//Sessao
session_start();


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CATEGORIAS</title>
    <link rel="icon" type="imagem/png" href="/htdocs/assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,900&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Varela+Round&amp;display=swap"
    />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link
      rel="stylesheet"
      href="assets/css/Bold-BS4-Animated-Back-To-Top.css"
    />
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Features-Blue.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="assets/css/Modal-Login-form-1.css" />
    <link rel="stylesheet" href="assets/css/Modal-Login-form.css" />
    <link
      rel="stylesheet"
      href="assets/css/MUSA_carousel-product-cart-slider-1.css"
    />
    <link
      rel="stylesheet"
      href="assets/css/MUSA_carousel-product-cart-slider.css"
    />
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css" />
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css" />
    <link
      rel="stylesheet"
      href="assets/css/Portfolio-with-Category-switcher.css"
    />
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css" />
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css" />
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css" />
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css" />
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css" />
</head>


<header>
    <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af);">
        <div class="container"><img src="assets/img/Kimbo-Recuperado.png" style="width: 124px;margin-top: -18px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin: 0px;height: 57px;width: 1500px;color: rgb(51, 51, 51);background: rgba(255,255,255,0);">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 1093.61px;height: 445px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-2" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255,255,255);">P??gina Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="aboutusLogado.php" style="color: rgb(255,255,255);height: -81px;width: 126.2344px;">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="navbar-nav">
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                        </ul>
                        <form class="me-auto search-form" target="_self" style="width: 568.9px;height: 170px;margin: 177px;">
                            <div class="d-flex align-items-center" style="margin: 58px;width: 415.9px;"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="bg-light border rounded-pill shadow form-control visible flash animated search-field" type="search" id="search-field" name="Procurar" style="color: var(--bs-gray-900);width: 381px;height: 32px;margin: 10px;padding: 12px 12px;" autocomplete="on" placeholder="Procurar"></div>
                        </form><i class="fa fa-user-o" style="color: rgb(255,255,255);font-size: 34px;margin-top: -36px;height: 3px;width: 116.7188px;"></i><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-left: 9px;margin-top: -15px;">MINHA CONTA<br></a><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-top: 22px;margin-left: -73px;">Nome do usuario</a><a class="btn btn-primary" role="button" style="margin-left: 40px;margin-top: -6px;background: var(--bs-yellow);" href="logout.php">Sair</a>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>

<body style="background: rgb(255,255,255);">

<main>
    
        <div class="carousel slide text-truncate d-lg-flex align-items-lg-center" data-bs-ride="carousel" id="carousel-2" style="height: 720px;width: 1920px;">
            <div class="carousel-inner">
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Kimbo.png" alt="Slide Image"></div>
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/banner2.png" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-2" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-2" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-2" data-bs-slide-to="1" class="active"></li>
            </ol>
        </div>

    <section class="text-center bg-light features-icons" style="padding: 175px 0px;margin-bottom: -72px;">
        <div style="width: 1949px;margin-top: -118px;"><strong class="flash animated infinite" style="font-size: 50px;font-family: Poppins, sans-serif;width: auto;margin: -8px;margin-top: -8px;padding-top: -5px;margin-left: 33px;">CATEGORIAS</strong></div>
        <section id="portfolio" class="portfolio" style="height: 752.75px;margin-left: 103px;width: 1810px;padding: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li class="filter-active" data-filter="*" style="color: var(--bs-blue);">TODOS</li>
                            <li data-filter=".filter-3d">Electronicos</li>
                            <li data-filter=".filter-logo">Cozinha</li>
                            <li data-filter=".filter-web">Acess??rios</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container justify-content-center row-cols-lg-2" style="margin-right: 103px;margin-left: 21px;">
                    <div class="col portfolio-item filter-logo col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="assets/img/41yaPmxIxXL._AC_UL320_.jpg" style="height: 226px;margin-top: 12px;"></div>
                    <div class="col portfolio-item filter-logo col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="assets/img/81VM5WBPRKL._AC_UY218_.png"></div>
                    <div class="col portfolio-item filter-logo col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="assets/img/71pj+Wso9mL._AC._SR360,460.png" style="height: 305.75px;"></div>
                    <div class="col portfolio-item filter-3d col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="assets/img/mono1_.png"></div>
                    <div class="col portfolio-item filter-3d col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="assets/img/iphone6.jpg" style="height: 213px;"></div>
                    <div class="col portfolio-item filter-app col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid" src="assets/img/61Wl66dhWeL._AC._SR360,460.png" style="height: 245.75px;"></div>
                    <div class="col portfolio-item filter-web col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid" src="assets/img/71YAIFU48IL.png" style="height: 236px;"></div>
                    <div class="col portfolio-item filter-web col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid" src="assets/img/81fPKd-2AYL.png" style="height: 247px;"></div>
                </div>
            </div>
        </section>
        <div></div>
        <div class="text-end d-xl-flex justify-content-xl-end" style="width: 100%;height: 100px;margin-top: 150px;background-color: rgba(255,0,230,0);position: fixed;margin-left: auto;margin-right: 20px;"><a class="js-scroll-trigger" href="#"><i class="fa fa-arrow-circle-up" style="font-size: 60px;margin-right: 20px;color: rgb(162,162,162);"></i></a></div>
    </section><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image:url(&quot;assets/img/cd-top-arrow.svg&quot;);" href="#0">Top</a>
    <div>
        <div class="text-end d-xl-flex justify-content-xl-end" style="width: 100%;height: 100px;margin-top: 150px;background-color: rgba(255,0,230,0);position: fixed;margin-left: auto;margin-right: 20px;"><a class="js-scroll-trigger" href="#"><i class="fa fa-arrow-circle-up" style="font-size: 60px;margin-right: 20px;color: rgb(162,162,162);"></i></a></div>
    </div>

</main>


    <footer class="features-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">KimboSpace</a></h3>
                    <p class="links"><a href="Logado1.php">P??gina Principal</a><strong> ?? </strong><a href="categoriasLogado.php">Categorias</a><strong> ?? </strong><a href="contactosLogado.php">Divulgue aqui</a><strong> ??&nbsp;&nbsp;</strong><a href="aboutusLogado.php">Sobre N??s</a></p>
                    <p class="company-name" style="color: rgb(255,255,255);">Kimbo Space ?? 2022</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Centralidade do Sequele</span> Angola, Luanda</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-start"> +24 999 999 999</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank" style="color: rgb(255,255,255);">kimbospacelmt@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 footer-about">
                    <h4>SOBRE A EMPRESA</h4>
                    <p style="color: rgb(255,255,255);"> A empresa kimbo space ?? uma organiza????o formada por 15 elementos, que vem ao mercado angolano para causar impactos</p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/Portfolio-with-Category-switcher.js"></script>
</body>

</html>