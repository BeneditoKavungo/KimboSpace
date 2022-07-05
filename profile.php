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
    <title>PERFIL DO USUÁRIO</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-1.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Product-Details.css">
    <link rel="stylesheet" href="assets/css/Product-Viewer-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
</head>

<header>
    <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af);">
        <div class="container"><img src="assets/img/Kimbo-Recuperado.png" style="width: 124px;margin-top: -18px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin: 0px;height: 57px;width: 1500px;color: rgb(51, 51, 51);background: rgba(255,255,255,0);">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 1093.61px;height: 0px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-2" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255,255,255);">Página Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="aboutusLogado.php" style="color: rgb(255,255,255);height: -81px;width: 126.2344px;">Sobre Nós</a></li>
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

<body>
    <main class="page" style="min-height: 100%;">
        <section class="clean-block about-us">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-md-12" style="margin-bottom: 25px;padding-left: 75px;font-size: 21px;margin-top: 73px;"><a class="anone" href="profile.php"><i class="fa fa-long-arrow-left"></i><span>&nbsp; Volver</span></a></div>
            </div>
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col text-center">
                    <h2 class="text-info">DADOS DO USUARIO</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/testimonials-1.jpg">
                        <div class="card-body info">
                            <div class="row" style="margin-top: -24px;">
                                <div class="col-md-12" style="margin-top: 22px;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);"><strong>Nome do usuario</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);">Username</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);"><strong>Telefone</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);">+244 999 999 999</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);"><strong>Provincia</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);">Luanda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);"><strong>Nº BI</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);">323213LAD0239</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);"><strong>Cartao Postal</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="labels" style="color: rgb(0,0,0);">002313</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><a class="btn btn-primary" role="button" href="editProfile.html"><i class="fas fa-pencil-alt"></i>&nbsp;Editar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<footer class="features-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">KimboSpace</a></h3>
                <p class="links"><a href="Logado1.php">Página Principal</a><strong> · </strong><a href="categoriasLogado.php">Categorias</a><strong> · </strong><a href="contactosLogado.php">Divulgue aqui</a><strong> ·&nbsp;&nbsp;</strong><a href="aboutusLogado.php">Sobre-Nós</a></p>
                <p class="company-name" style="color: rgb(255,255,255);">Kimbo Space © 2022</p>
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
                <p style="color: rgb(255,255,255);"> A empresa kimbo space é uma organização formada por 15 elementos, que vem ao mercado angolano para causar impactos</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
<script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



</html>