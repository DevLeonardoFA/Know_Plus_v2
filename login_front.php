<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_for_login.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center text-center">
          <div class="register-form-box mt-5">
            <form class="mt-1" action="login_back.php" method="POST">
              <input type="text" name="login" id="login" placeholder="Login">
              <input type="password" name="senha" id="senha" placeholder="Senha">
              <div class="mt-1 form-group">
                <button type="submit" name="btn_entrar" id="btn_entrar" >logar</button>
                <a href="cadastro_front.php"><button type="button" name="btn_redirect">cadastrar</button></a> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
