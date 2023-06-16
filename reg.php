<?php
    include("path.php");
    include("./app/controllers/users.php");
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c4eb5fb843.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>

  <body>
    <!-- Header -->
    <?php
    include("./app/include/header.php");
    ?>

<!-- FORM -->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="reg.php">
            <h2>Форма регистрации</h2>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="login" value="<?=$login ?>">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"  value="<?=$email ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass-first">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="pass-second">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
              <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
              <a href="log.php">Войти</a>
            </div>
        </form>
    </div>

<!-- FOOTER -->
    <?php
    include("./app/include/footer.php");
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>