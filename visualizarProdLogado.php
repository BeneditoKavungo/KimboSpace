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
    <title>KIMBOSPACE ACTUALIZADO</title>
    <link rel="icon" type="imagem/png" href="/htdocs/assets/img/favicon.ico" />
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
    <link rel="stylesheet" href="assets/css/Filter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form-1.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-1.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css">
    <link rel="stylesheet" href="assets/css/Portfolio-with-Category-switcher.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Product-Details.css">
    <link rel="stylesheet" href="assets/css/Product-Viewer-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">
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
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255,255,255);">P??gina Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue auqi</a></li>
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

<body>
    <main>
        <div class="container" style="width: 1040px;height: 955.5px;margin-right: 429.5px;margin-top: 128px;box-shadow: 4px 4px 20px 0px rgb(33, 37, 41);">
            <h1 class="text-center">Detalhes do Produto</h1>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="assets/img/Screenshot_18.jpg" style="height: 517.062px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/Screenshot_18.jpg"></div>
                        <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/Screenshot_18.jpg"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h1>Rolex Emporio Armani&nbsp;</h1>
                    <p style="font-weight: bold;">Rolex Emporio Armani<br><br>Grave v??deos 4K, fa??a belos retratos e capture paisagens inteiras com o novo sistema de c??mera dupla. Tire fotos incr??veis com pouca luz usando o modo Noite. Veja cores fi??is em fotos, v??deos e jogos na tela Liquid Retina de 6,1 polegadas***. Leve o desempenho sem precedentes do chip A13 Bionic para seus games, realidade aumentada e fotografia. Fa??a muito e recarregue pouco com a bateria para o dia todo**. E conte com resist??ncia ?? ??gua de at?? dois metros por at?? 30 minutos*.Avisos legais:*O iPhone 11 ?? resistente a respingos, ??gua e poeira e foi testado em condi????es controladas em laborat??rio, classificado como IP68 segundo a norma IEC 60529 (profundidade m??xima de at?? dois metros por at?? 30 minutos). A resist??ncia a respingos, ??gua e poeira n??o ?? uma condi????o permanente e pode diminuir com o tempo. N??o tente recarregar um iPhone molhado. Veja instru????es no Manual do Usu??rio para limpeza e secagem. Danos decorrentes de contato com l??quidos n??o est??o inclu??dos na garantia.**A dura????o da bateria varia de acordo com o uso e a configura????o. Consulte o site do fabricante para obter mais informa????es.<br></p>
                    <h2 class="text-center text-success"><i class="fa fa-money"></i>22.000KZ<br><br></h2><a class="btn btn-danger btn-lg center-block" role="button" href="https://api.whatsapp.com/send?phone=+244995583921&text=Ol%C3%A1%20boa%20noite%2C%20estou%20interessado%20no%20produto." style="margin-left: 2px;height: 48px;width: 392.484px;"><i class="fa fa-cart-plus" style="margin-right: 8px;"></i>COMPRAR</a>
                </div>
            </div>
        </div>
    </main>
</body>

<footer class="features-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">KimboSpace</a></h3>
                <p class="links"><a href="Logado1.php">P??gina Principal</a><strong> ?? </strong><a href="categoriasLogado.php">Categorias</a><strong> ?? </strong><a href="aboutusLogado.php">Sobre N??s</a><strong> ??&nbsp;&nbsp;</strong><a href="contactosLogado.php">Divulgue aqui</a></p>
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
<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
<script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.js"></script>
<script src="assets/js/Portfolio-with-Category-switcher.js"></script>
<script src="assets/js/Product-Viewer-1-1.js"></script>
<script src="assets/js/Product-Viewer-1.js"></script>
<script src="assets/js/Sidebar-Menu.js"></script>
<script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
<script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>