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
    <title>KIMBO SPACE</title>
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
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 1093.61px;height: 445px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-2" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="Logado1.php" style="color: rgb(255,255,255);">P??gina Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categoriasLogado.php" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactosLogado.php" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="aboutusLogado.php" style="color: rgb(255,255,255);height: -81px;width: 126.2344px;">Sobre N??s</a></li>
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
                        </form><i class="fa fa-user-o" style="color: rgb(255,255,255);font-size: 34px;margin-top: -36px;height: 3px;width: 116.7188px;"></i><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-left: 9px;margin-top: -15px;">MINHA CONTA<br></a><a class="text-nowrap" href="profile.php" style="font-size: 10px;margin-top: 22px;margin-left: -73px;">Nome do usuario
                        </a><a class="btn btn-primary" role="button" style="margin-left: 40px;margin-top: -6px;background: var(--bs-yellow);" href="logout.php">Sair</a>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>

<body>
    <main>
        <div class="carousel slide text-truncate d-lg-flex align-items-lg-center" data-bs-ride="carousel" id="carousel-1" style="height: 720px;width: 1920px;">
            <div class="carousel-inner">
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Kimbo.png" alt="Slide Image"></div>
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/banner2.png" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1" class="active"></li>
            </ol>
        </div>

        <section class="text-center bg-light features-icons" style="padding: 175px 0px;">
            <H1 data-bss-hover-animate="flash" style="margin-top: 10px;">SEJA BEM VINDO</H1>
            <div class="container" style="width: 1401px;box-shadow: 1px 1px 4px;">
                <div class="row product-list dev" style="height: 5534px;background: #ffffff;margin-top: 30px;margin-bottom: 32px;max-width: -6px;padding: 21px;margin-left: -3px;">
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_18.jpg" style="width: auto;height: 404px;margin-top: -19px;margin-right: 1px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Rolex Emporio Armani</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProdLogado.php" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">6.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_19.jpg" style="width: auto;height: 404px;margin-top: -19px;margin-right: 1px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Sapato All-Star</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProdLogado.php" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">20.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-fade-slow">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/mono1_.jpg" style="height: 246px;margin-top: 48px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">MAC-BOOK PRO SERIE</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProdLogado.php" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">250.999,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-fade">
                        <div class="product-container" style="width: 403px;">
                            <div class="row" style="height: 459px;">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/videomic-me.gif" style="height: 184px;margin-top: 51px;"></a></div>
                            </div>
                            <div class="row" style="height: 58px;">
                                <div class="col-8">
                                    <h2><a href="#">Ferramentas IPhone 6</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">5.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-fade-xslow" style="height: 880.4px;">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_23.jpg" style="margin-top: -16px;height: 379px;margin-right: 0px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Camisa&nbsp; Polo</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">2,000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-left">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/71YAIFU48IL.jpg" style="height: 261px;margin-top: 37px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Anel de Prata</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">11.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top" style="height: 1004.5px;padding: 10px;">
                        <div class="product-container" style="width: 403px;">
                            <div class="row" style="height: 459px;">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/81fPKd-2AYL.jpg" style="height: 291px;"></a></div>
                            </div>
                            <div class="row" style="height: 58px;">
                                <div class="col-8">
                                    <h2><a href="#">Mochila</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row" style="width: 375px;">
                                <div class="col-12" style="width: 361px;">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row" style="width: 361px;">
                                        <div class="col-6" style="height: 62px;"><a class="btn btn-primary" role="button" href="visualizarProd.html" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6" style="height: 62px;">
                                            <p class="product-price">15.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-right" style="width: 423px;height: 932px;">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_25.jpg" style="height: 208px;margin-top: 68px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">SSD PLUS SanDisk</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row" style="width: 375px;">
                                <div class="col-12" style="width: 361px;">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row" style="width: 361px;">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6" style="height: 62px;">
                                            <p class="product-price">25.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom-left" style="height: 856.5px;padding: 10px;margin: 0px;">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_26.jpg" style="height: 201px;margin-top: 65px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Monitor Gamer QLED</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">$599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/51x0uIP+9GL._AC_UL320_.jpg" style="height: 316px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">M??quina de Lavar</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">100.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom-right">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/41yaPmxIxXL._AC_UL320_.jpg" style="height: 348px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Geladeira</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">150.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise-180">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/71pj+Wso9mL._AC._SR360,460.jpg" style="height: 344px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Micro-ondas</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">69.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-counterclockwise">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/41lzjnxg8OL._AC._SR180,230.jpg" style="height: 302px;margin-top: 26px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Aparelho de som JBL</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">72.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-counterclockwise-180">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/51OAL0TlojL._AC._SR360,460.jpg" style="height: 273px;margin-top: 29px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Furadeira</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">$10.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-right-rotate-counterclockwise">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/61Wl66dhWeL._AC._SR360,460.jpg" style="height: 251px;margin-top: 43px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Ferramenta Constru????o</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html" target="_blank">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">13.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-flip-x">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/81VM5WBPRKL._AC_UY218_.jpg" style="height: 258px;margin-top: 22px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Conjunto de Facas</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">5.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-left-rotate-clockwise">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg" style="height: 288px;margin-top: 17px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">IPhone 6S&nbsp;</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">130.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-right-flip-x-y">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/Screenshot_20.jpg" style="height: 294px;margin-top: 15px;"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Web-Cam</a></h2>
                                </div>
                                <div class="col-4"><a class="small-text" href="#">compare </a></div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                    <div class="row">
                                        <div class="col-6"><a class="btn btn-primary" role="button" href="visualizarProd.html">Visualizar Produto</a></div>
                                        <div class="col-6">
                                            <p class="product-price">7.000,00KZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end d-xl-flex justify-content-xl-end" style="width: 100%;height: 100px;margin-top: 150px;background-color: rgba(255,0,230,0);position: fixed;margin-left: auto;margin-right: 20px;"><a class="js-scroll-trigger" href="#"><i class="fa fa-arrow-circle-up" style="font-size: 60px;margin-right: 20px;color: rgb(162,162,162);"></i></a></div>
        </section>
        <section class="showcase">
            <section class="text-center bg-light testimonials" style="margin-bottom: -87px;">
                <div class="container">
                    <h2 class="mb-5">O QUE AS PESSOAS ACHAM DOS NOSSOS SERVI??OS.</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-2.jpg">
                                <h5>Eddie D. Pinho</h5>
                                <p class="font-weight-light mb-0">"Excelentes servi??os, entregas a tempo"</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-1.jpg">
                                <h5>Fred S.</h5>
                                <p class="font-weight-light mb-0">"Empresa confi??vel para aquisi????o de produtos"</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-3.jpg">
                                <h5>Sarah W.</h5>
                                <p class="font-weight-light mb-0">"Muito obrigado pelo atendimento"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);" href="#0">Top</a>
        <div>
            <div class="text-end d-xl-flex justify-content-xl-end" style="width: 100%;height: 100px;margin-top: 150px;background-color: rgba(255,0,230,0);position: fixed;margin-left: auto;margin-right: 20px;"><a class="js-scroll-trigger" href="#"><i class="fa fa-arrow-circle-up" style="font-size: 60px;margin-right: 20px;color: rgb(162,162,162);"></i></a></div>
        </div>
    </main>
</body>


<footer class="features-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">KimboSpace</a></h3>
                <p class="links"><a href="Logado1.php">P??gina Principal</a><strong> ?? </strong><a href="categoriasLogado.php">Categorias</a><strong> ?? </strong><a href="contactosLogado.php">Divulgue aqui</a><strong> ??&nbsp;&nbsp;</strong><a href="aboutusLogado.php">Sobre-N??s</a></p>
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
<script src="assets/js/Portfolio-with-Category-switcher.js"></script>
<script src="assets/js/Product-Viewer-1-1.js"></script>
<script src="assets/js/Product-Viewer-1.js"></script>
</body>

</html>