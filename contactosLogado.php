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
  <title>DIVULGUE AQUI</title>
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
  <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af)">
    <div class="container">
      <img src="assets/img/Kimbo-Recuperado.png" style="width: 124px; margin-top: -18px" />
      <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="
            margin: 0px;
            height: 57px;
            width: 1500px;
            color: rgb(51, 51, 51);
            background: rgba(255, 255, 255, 0);
          ">
        <div class="container">
          <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navcol-1" style="width: 1093.61px; height: 445px">
            <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255, 255, 255, 0)">
              <div class="container-fluid">
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                  <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-2" style="width: 336.141px; margin: 0px; margin-right: 11px">
                  <ul class="navbar-nav" style="
                        width: 340.141px;
                        padding: 20px;
                        margin: 11px;
                        height: 78px;
                        margin-top: 18px;
                      ">
                    <li class="nav-item text-nowrap text-center">
                      <a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255, 255, 255)">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px; color: rgb(255, 255, 255)">Categorias</a>
                    </li>
                    <li class="nav-item"></li>
                    <li class="nav-item" style="margin-left: 21px">
                      <a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="
                            width: 126.2344px;
                            margin-left: -15px;
                            color: rgb(255, 255, 255);
                          ">Divulgue aqui</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bss-hover-animate="pulse" href="aboutusLogado.php" style="
                            color: rgb(255, 255, 255);
                            height: -81px;
                            width: 126.2344px;
                          ">Sobre Nós</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <ul class="navbar-nav">
              <li class="nav-item"></li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
            </ul>
            <form class="me-auto search-form" target="_self" style="width: 568.9px; height: 170px; margin: 177px">
              <div class="d-flex align-items-center" style="margin: 58px; width: 415.9px">
                <label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="bg-light border rounded-pill shadow form-control visible flash animated search-field" type="search" id="search-field-1" name="Procurar" style="
                      color: var(--bs-gray-900);
                      width: 381px;
                      height: 32px;
                      margin: 10px;
                      padding: 12px 12px;
                    " autocomplete="on" placeholder="Procurar" />
              </div>
            </form>
            <i class="fa fa-user-o" style="
                  color: rgb(255, 255, 255);
                  font-size: 34px;
                  margin-top: -36px;
                  height: 3px;
                  width: 116.7188px;
                "></i><a class="text-nowrap" href="profile.php" style="font-size: 10px; margin-left: 9px; margin-top: -15px">MINHA CONTA<br /></a><a class="text-nowrap" href="profile.php" style="font-size: 10px; margin-top: 22px; margin-left: -73px">Nome do usuario</a><a class="btn btn-primary" role="button" style="
                  margin-left: 40px;
                  margin-top: -6px;
                  background: var(--bs-yellow);
                " href="logout.php">Sair</a>
          </div>
        </div>
      </nav>
    </div>
  </nav>
</header>

<body>
  <div class="text-center" style="margin-top: 121px;">
    <div class="container text-center">
      <form class="align-content-center" id="contactForm" action="javascript:void();" method="get">
        <fieldset style="width: 1297px;">
          <legend style="font-style: normal;font-weight: bold;font-size: 28px;">DIVULGUE AQUI O SEU PRODUTO</legend>
        </fieldset>
        <div class="row text-start" style="padding: 0px;">
          <div class="col-md-6" id="message-1" style="width: 366px;height: 377px;min-width: 0px;margin-top: 31px;">
            <div class="has-feedback form-group mb-3" style="height: 70px;width: 350px;"><label class="form-label" for="from_name" style="font-size: 20px;">Nome do produto</label><input class="form-control" type="text" style="width: 358px;height: 39px;"></div>
            <div class="has-feedback form-group mb-3" style="width: 350px;"><label class="form-label" for="from_email" style="font-size: 20px;">Preço do produto</label><input class="form-control" type="tel" style="font-size: 21px;height: 39px;width: 358px;"></div>
            <div class="has-feedback form-group mb-3" style="height: 70px;width: 320px;"><label class="form-label" for="from_name" style="font-size: 20px;">Tipo de produto</label><select class="form-select form-select-sm d-xl-flex" style="width: 358px;height: 39px;">
                <option value="" selected="">Selecione a categoria do produto</option>
                <option value="12">Eletronico</option>
                <option value="13">Cozinha</option>
                <option value="14">Construção Civil</option>
                <option value="14">Automóveis</option>
                <option value="14">Imobiliários</option>
              </select></div>
            <div class="has-feedback form-group mb-3"><label class="form-label" for="from_phone" style="font-size: 20px;">Número de telefone</label><input class="form-control" type="tel" style="font-size: 21px;height: 39px;width: 358px;"></div>
          </div>
          <div class="col-md-6" id="message-2" style="width: 676px;">
            <div style="margin-left: -250PX;margin-bottom: 0px;margin-top: 65px;width: 1086px;">
              <div class="row padMar mx-auto col-sm-9 col-md-7 col-lg-5 col-xl-6 colorCajasBlancas margenesCajas">
                <div class="col margenesCajas">
                  <div class="row">
                  <input class="col-12 col-sm-10 col-md-10 col-lg-12 col-xl-9 d-flex flex-wrap padMar mx-auto" type="file" name="arquivos" class="btn btn-success"  accept="image/png, image/jpeg"  multiple /> 
                  </div>
                </div>
              </div>
            </div>
            <div class="has-feedback form-group mb-3" style="margin-left: 102px;"><label class="form-label" for="from_name" style="font-size: 20px;">Descrição do produto</label><input class="form-control" type="text" style="width: 552px;height: 181px;"></div>
          </div>
        </div>
        <div class="row text-center d-xl-flex justify-content-xl-start" style="margin-top: 52px;">
          <div class="col"><button class="btn btn-primary text-center d-block w-100" type="submit" style="width: 277px;height: 45px;margin: 25px;margin-top: 0px;background-color: #ff0000;margin-bottom: 27px;">CANCELAR &nbsp;<i class="typcn typcn-delete-outline"></i></button></div>
          <div class="col text-start d-xl-flex" style="padding-right: 50px;"><button class="btn btn-primary text-center d-block w-100" type="submit" style="width: 300px;height: 45px;margin: 0px;margin-top: 0px;">ENVIAR &nbsp;<i class="fa fa-chevron-circle-right"></i></button></div>
        </div>
      </form>
    </div>
  </div>
</body>
<footer class="features-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 footer-navigation">
        <h3>
          <a href="#" style="
                  color: rgb(255, 255, 255);
                  font-family: Poppins, sans-serif;
                ">KimboSpace</a>
        </h3>
        <p class="links">
          <a href="Logado1.php">Página Principal</a><strong> · </strong><a href="categoriasLogado.php">Categorias</a><strong> · </strong><a href="contactosLogado.php">Divulgue aqui</a><strong> ·&nbsp;&nbsp;</strong><a href="aboutusLogado.php">Sobre Nós</a>
        </p>
        <p class="company-name" style="color: rgb(255, 255, 255)">
          Kimbo Space © 2022
        </p>
      </div>
      <div class="col-sm-6 col-md-4 footer-contacts">
        <div>
          <span class="fa fa-map-marker footer-contacts-icon"> </span>
          <p>
            <span class="new-line-span">Centralidade do Sequele</span>
            Angola, Luanda
          </p>
        </div>
        <div>
          <i class="fa fa-phone footer-contacts-icon"></i>
          <p class="footer-center-info email text-start">+24 999 999 999</p>
        </div>
        <div>
          <i class="fa fa-envelope footer-contacts-icon"></i>
          <p>
            <a href="#" target="_blank" style="color: rgb(255, 255, 255)">kimbospacelmt@gmail.com</a>
          </p>
        </div>
      </div>
      <div class="col-md-4 footer-about">
        <h4>SOBRE A EMPRESA</h4>
        <p style="color: rgb(255, 255, 255)">
          A empresa kimbo space é uma organização formada por 15 elementos,
          que vem ao mercado angolano para causar impactos
        </p>
        <div class="social-links social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a>
        </div>
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
<script src="assets/js/Portfolio-with-Category-switcher.js"></script>
<script src="assets/js/Product-Viewer-1-1.js"></script>
<script src="assets/js/Product-Viewer-1.js"></script>


</html>