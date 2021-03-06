<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_for_register.css">

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
            <form class="mt-1" action="cadastro_back.php" method="POST">
              <input type="text" name="login" id="login" placeholder="username"><br>
              <input type="password" name="senha" id="senha" placeholder="password"><br>
              <div class="input-group justify-content-center mt-1">
                <button type="submit" name="next" class="rounded">cadastrar</button>
                <a href="login_front.php" class="cadastro_btn"><button type="button" name="back" class="rounded">fazer login</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
