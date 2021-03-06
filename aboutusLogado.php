<?php
//conexao com a base de dadps
require_once 'dbconnect.php';

//Sessao
session_start();


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>SOBRE NÓS</title>
  <link rel="icon" type="imagem/png" href="/htdocs/assets/img/favicon.ico" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,900&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&amp;display=swap" />
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
  <link rel="stylesheet" href="assets/css/Features-Blue.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/Modal-Login-form-1.css" />
  <link rel="stylesheet" href="assets/css/Modal-Login-form.css" />
  <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css" />
  <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css" />
  <link rel="stylesheet" href="assets/css/Navigation-with-Button.css" />
  <link rel="stylesheet" href="assets/css/Navigation-with-Search.css" />
  <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css" />
  <link rel="stylesheet" href="assets/css/Pretty-Footer.css" />
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css" />
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css" />
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css" />
</head>


<header>
    <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af);">
        <div class="container"><img src="assets/img/Kimbo-Recuperado.png" style="width: 124px;margin-top: -18px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin: 0px;height: 57px;width: 1500px;color: rgb(51, 51, 51);background: rgba(255,255,255,0);">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-3" style="width: 1093.61px;height: 445px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-4" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255,255,255);">Página Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui<br></a></li>
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
                            <div class="d-flex align-items-center" style="margin: 58px;width: 415.9px;"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="bg-light border rounded-pill shadow form-control visible flash animated search-field" type="search" id="search-field-1" name="Procurar" style="color: var(--bs-gray-900);width: 381px;height: 32px;margin: 10px;padding: 12px 12px;" autocomplete="on" placeholder="Procurar"></div>
                        </form><i class="fa fa-user-o" style="color: rgb(255,255,255);font-size: 34px;margin-top: -36px;height: 3px;width: 116.7188px;"></i><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-left: 9px;margin-top: -15px;">MINHA CONTA<br></a><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-top: 22px;margin-left: -73px;">Nome do usuario</a><a class="btn btn-primary" role="button" style="margin-left: 40px;margin-top: -6px;background: var(--bs-yellow);" href="index.html">Sair</a>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>

<body>

    <main>

    <section class="about-us" style="margin-top: 102px;">
        <div class="container">
            <div class="row padding-content">
                <div class="col-md-4 no-padding">
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
                                <li style="margin-top: 0px;"><img id="wows1_0" src="assets/img/30306b1b67cff5300aa3364fb94d53fc--estilo-industrial-commercial-design.jpg" style="width: 390px;margin-top: 83px;"></li>
                            </ul>
                        </div>
                        <div class="ws_script" href="http://wowslider.net" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a><strong>Bold</strong></div>
                        <div class="ws_shadow"></div>
                    </div>
                </div>
                <div class="col-md-8 abt-right" style="background: rgb(255,255,255);margin-top: -22px;">
                    <h1 class="text-center" style="color: rgb(0,0,0);margin-left: 0px;font-family: 'Varela Round', sans-serif;">KIMBO SPACE</h1>
                    <p style="font-size: 17px;text-align: justify;color: rgb(0,0,0);font-family: 'Varela Round', sans-serif;">A KIMBO SPACE é uma empresa angolana que actua no sector comercial (e-commerce), propriamente dedicada a vendas e revendas de produtos, que oferece diversas soluções de comércio eletrónico, para que pessoas ou organizações possam comprar, vender, pagar, anunciar e enviar variações de produtos pela internet, e tem facilitado a vida de algumas centenas de angolanos. Em maio de 2018, João Puro Kimbo, fundador da firma, enquanto terminava o ensino superior na Universidade Agostinho Neto, traçou planos de negócios para serem implementados no mercado angolano e com o tempo foi formando uma equipe de profissionais para colocá-lo em execução. Contudo, em meados de 2019 as operações foram iniciadas, e de mãos abertas foram bem recebidas pelo povo angolano. Como e qualquer uma empresa ao longo do tempo de actividade apresenta dificuldades, problemas, o caso da KIMBO SPACE não foi diferente. A empresa a partir dai tem enfrentando problemas de falta de engajamento dos seus produtos e serviços à nível digital.<br><br><br></p>
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
                    <p class="links"><a href="Logado1.php">Página Principal</a><strong> · </strong><a href="categoriasLogado.php">Categorias</a><strong> · </strong><a href="contactosLogado.php">Divulgue aqui<br></a><strong> ·&nbsp;&nbsp;</strong><a href="aboutusLogado.php">Sobre Nós</a></p>
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
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>


</html>