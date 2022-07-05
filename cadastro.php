<?php
if (isset($_POST['submit'])) {
  

    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
}

 

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CADASTRO</title>
    <link rel="icon" type="imagem/png" href="/htdocs/assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form-1.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
</head>

<header>
    <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af);">
        <div class="container"><img src="assets/img/Kimbo-Recuperado.png" style="width: 124px;margin-top: -18px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin: 0px;height: 57px;width: 1500px;color: rgb(51, 51, 51);background: rgba(255,255,255,0);">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-3" style="color: rgba(7,7,7,0.06);background: rgba(255,255,255,0);width: 1027.42px;height: 0px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-4" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="index.html" style="color: rgb(255,255,255);">Página Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categorias.html" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactos.html" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui&nbsp;</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="aboutus.html" style="color: rgb(255,255,255);height: -81px;width: 126.2344px;">Sobre Nós</a></li>
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
                        </form><a class="btn btn-primary btn-sm action-button" role="button" data-bss-hover-animate="flash" href="login.php" style="width: 87px;margin: 6px;background: var(--bs-yellow);color: var(--bs-gray-200);font-weight: bold;">Login</a><a class="btn btn-light action-button" role="button" data-bss-hover-animate="flash" href="cadastro.html" style="background: var(--bs-yellow);font-weight: bold;">Registar</a>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>

<body>

    <main> 

    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="POST" action="processa.php" class="custom-form" style="box-shadow: 1px 1px 20px 0px var(--bs-gray-900);">
                <h1>Formulário de Cadastro</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nome</label></div>
                    <div class="col-sm-6 offset-xl-0 input-column"><input class="form-control" type="text" required="" maxlength="30" name="nome"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" required="" maxlength="40" name="email"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Palavra-Passe</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" required="" maxlength="15" name="senha"></div>
                </div>
                <button class="btn btn-light submit-button" type="submit" style="background: rgb(108, 174, 224);">Submeter Cadastro</button>
            </form>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>