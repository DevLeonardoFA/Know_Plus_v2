<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">

    <?php
      $login_cookie = $_COOKIE['login'];

      $login = false;
      if (isset($login_cookie)) {
        $login = true;
      }else{
        $login = false;
      }
    ?>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_for_index.css">

    <script src="assets/js/script.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <title>KP</title>
  </head>
  <body class="inicial">

    <header>
      <div class="container-fluid header__container--background">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-1">
              <div id="mySidenav" class="sidenav">
                <img src="assets/images/promoving.jpg" alt="" class="header__sidebar--user-area">
                <a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
                <a href="#" class="back_to_normal"></a>
                <section>
                  <a href="<?php if ($login != true) { echo "login_front.php";}else{echo "perfil_front.php";}?>">Perfil</a>
                  <a href="#">Videos</a>
                  <a href="#">Acompanhamento</a>
                  <a href="#">Profissionais</a>
                  <a href="#">Sobre</a>
                  <?php
                  if ($login == true) {
                    echo "<br><br><br><br>";
                    echo "<button class='sidenav__btn-deslogar' type='button' name='button'>Deslogar</button>";
                  }
                  ?>
                </section>
              </div>
              <div id="main">
                <a href="#menu" class="box-shadow-menu" onclick="opennav()" href="#"></a>
              </div>
            </div>
            <div class="col-7">
              <h1 class="pt-1 pl-5 header__text--color">Know Plus</h1>
            </div>
            <div class="col-4">
              <div class="input-group pt-2">
                <input type="search" class="form-control">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary btn-icons" type="button" name="button"><img src="assets/images/lupa.png" class="icons-header" alt="lupa"></button>
                  <button class="btn btn-outline-secondary btn-icons" type="button" name="button"><img src="assets/images/user.png" class="icons-header" alt="user"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <section class="pt-5 body__frase-principal">
            <h1>SEJA UM DESIGNER VOCÊ TAMBÉM!</h1>
            <h3>Aprenda ou aprimore sua criatividade</h3>
          </section>
          <button type="button" name="button" class="rounded p-2 pl-5 pr-5 mt-4 body__btn-principal aling-center">
            <h1>Assine agora!</h1>
            <p class="mb-0">30 dias grátis</p>
          </button>
        </div>
      </div>
    </div>
    <div class="container mt-5 mb-3">
      <div class="row">
        <div class="col-3">
          <div class="mt-4 body__video-block rounded">
            <div class="body__videos">
            </div>
            <div class="body__title">

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="mt-4 body__video-block rounded">
            <div class="body__videos">
            </div>
            <div class="body__title">

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="mt-4 body__video-block rounded">
            <div class="body__videos">
            </div>
            <div class="body__title">

            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="mt-4 body__video-block rounded">
            <div class="body__videos">
            </div>
            <div class="body__title">

            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center footer__frase">
            <h5>Know Plus</h5>
            <h6>feito em 07/02/2019</h6>
          </div>
        </div>
      </div>
    </footer>

    </div>
  </body>
</html>
