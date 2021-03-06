<?php
//conexao com a base de dadps
require_once 'dbconnect.php';

//Sessao
session_start();

//botao enviar 

if (isset($_POST['entrar'])) :
    $erros = array();
    $email = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($email) or empty($senha)) :
        $erros[] = "<li> O campo login/senha precisa ser preenchido <li>";
    else :
        $sql = "SELECT email FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($connect, $sql);


        if (mysqli_num_rows($resultado) > 0) :
            $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) == 1) :
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: Logado1.php');
            else :
                $erros[] = "<li> Nao conferem <li>";
            endif;

        else :
            $erros[] = "<li>Usuario inexistente<li>";
        endif;
    endif;
endif;

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LOGIN</title>
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
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form-1.css">
    <link rel="stylesheet" href="assets/css/Modal-Login-form.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
</head>

<body style="background: rgb(255,255,255);">
    <?php
    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo $erro;
        endforeach;
    endif;


    ?>
    <nav class="navbar navbar-light navbar-expand bg-white d-flex flex-row navigation-clean" style="background: linear-gradient(135deg, #172a74 0%, #21a9af);">
        <div class="container"><img src="assets/img/Kimbo-Recuperado.png" style="width: 124px;margin-top: -18px;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin: 0px;height: 57px;width: 1500px;color: rgb(51, 51, 51);background: rgba(255,255,255,0);">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 1093.61px;height: 445px;">
                        <nav class="navbar navbar-light navbar-expand-md" style="background: rgba(255,255,255,0);">
                            <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navcol-2" style="width: 336.141px;margin: 0px;margin-right: 11px;">
                                    <ul class="navbar-nav" style="width: 340.141px;padding: 20px;margin: 11px;height: 78px;margin-top: 18px;">
                                        <li class="nav-item text-nowrap text-center"><a class="nav-link" data-bss-hover-animate="pulse" href="index.html" style="color: rgb(255,255,255);">P??gina Inicial</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="categorias.html" style="width: 100.2344px;color: rgb(255,255,255);">Categorias</a></li>
                                        <li class="nav-item"></li>
                                        <li class="nav-item" style="margin-left: 21px;"><a class="nav-link text-nowrap" data-bss-hover-animate="pulse" href="contactos.html" style="width: 126.2344px;margin-left: -15px;color: rgb(255,255,255);">Divulgue aqui</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="aboutus.html" style="color: rgb(255,255,255);height: -81px;width: 126.2344px;">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav><a class="text-nowrap" data-bss-hover-animate="flash" href="cadastro.php" style="margin: 0px;margin-left: 547px;color: rgb(255,255,255);">N??o possui uma conta?</a>
                        <ul class="navbar-nav">
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                            <li class="nav-item"></li>
                        </ul><a class="btn btn-light action-button" role="button" data-bss-hover-animate="flash" href="cadastro.php" style="background: var(--bs-yellow);font-weight: bold;margin-left: 8px;">Registar</a>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <section class="login-clean" style="background: rgb(255,255,255);">
        <div id="myModal-1" style="background: #ffffff;width: 1757px;">
            <div class="modal-dialog modal-login">
                <div class="modal-content" style="width: 572px;height: 473px;margin: 0px;padding: 0px;box-shadow: 1px 1px 4px;margin-right: 0px;padding-right: -1px;">
                    <div class="modal-header">
                        <h4 class="h4 modal-title">Membros Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="height: 253px;width: 419px;padding: 40px;" data-netlify="true">
                            <div class="form-group"><i class="fa fa-star fa-user"></i><input class="form-control" type="text" placeholder="Email" required="required" minlength="10" maxlength="25" autocomplete="on" inputmode="email" name="login"></div>
                            <div class="form-group"><i class="fa fa-star fa-lock"></i><input class="form-control" type="password" placeholder="Palavra-Passe" required="required " name="senha"></div>
                            <div class="form-group" style="padding: 10px 80px 10px;margin: 0px;"><button class="btn btn-primary btn-block btn-lg" type="submit" name="entrar" value="Login" style="width: 85.9375px;background: #6caee0;">Login</button></div>
                        </form>
                    </div>
                    <div class="border rounded-0 modal-footer" style="margin: -5px;"><a class="link-primary" data-bss-hover-animate="flash" href="forgot.html" style="color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 17px;">Esqueceu a palavra-passe?</a></div>
                </div>
            </div>
        </div>
    </section>
    <footer class="features-blue" style="margin-bottom: 0px;margin-top: 121px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#" style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">KimboSpace</a></h3>
                    <p class="links"><a href="#">P??gina Principal</a><strong> ?? </strong><a href="#">Categorias</a><strong> ?? </strong><a href="#">Divulgue aqui</a><strong> ??&nbsp;&nbsp;</strong><a href="#">Sobre-N??s</a></p>
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

</body>

</html>