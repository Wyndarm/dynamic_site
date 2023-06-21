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
                    <a href="<?php echo BASE_URL . "/admin/posts/create.php" ?>" class="col-3 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "/admin/posts/index.php" ?>" class="col-3 btn btn-warning">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Управление записями</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">Название</div>
                    <div class="col-2">Автор</div>
                    <div class="col-2">Управление</div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-5">Какая-то там статья</div>
                    <div class="author col-2">Виталик</div>
                    <div class="red col-2"><a href="#">edit</a></div>
                    <div class="del col-2"><a href="#">delete</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-5">Какая-то там статья</div>
                    <div class="author col-2">Виталик</div>
                    <div class="red col-2"><a href="#">edit</a></div>
                    <div class="del col-2"><a href="#">delete</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-5">Какая-то там статья</div>
                    <div class="author col-2">Виталик</div>
                    <div class="red col-2"><a href="#">edit</a></div>
                    <div class="del col-2"><a href="#">delete</a></div>
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