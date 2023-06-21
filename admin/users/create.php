<?php session_start() ?>
<?php 
  include("../../path.php");
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

    <link rel="stylesheet" href="../../assets/css/admin.css">
  </head>

  <body>
    <!-- Header -->

    <?php
    include("../../app/include/header-admin.php");
    ?>

    <div class="container">
        <div class="row">
        <?php include("../../app/include/sidebar-admin.php"); ?>
            <div class="posts col-9">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "/admin/users/create.php" ?>" class="col-3 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "/admin/users/index.php" ?>" class="col-3 btn btn-warning">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2></h2>Создание пользователя
                </div>
                <div class="row add-post">
                    <form action="create.php" method="post">
                        <div class="сol">
                            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="login" value="">
                        </div>
                        <div class="сol">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"  value="">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="сol">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass-first">
                        </div>
                        <div class="сol">
                            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" name="pass-second">
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include("../../app/include/footer.php");
    ?>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>

</html>