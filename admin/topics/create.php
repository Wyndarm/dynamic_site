<?php 
  include("../../path.php");
  include("../../app/controllers/topics.php");
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
                    <a href="<?php echo BASE_URL . "/admin/topics/create.php" ?>" class="col-3 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "/admin/topics/index.php" ?>" class="col-3 btn btn-warning">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Создание категории</h2>
                </div>
                <div class="mb-12 col-12 col-md-12 err">
                    <p><?=$errMsg?></p>
                </div>
                <div class="w-100"></div>
                <div class="row add-post">
                    <form action="create.php" method="post">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории" value="<?=$name; ?>" name="name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Описание категории</label>
                            <textarea class="form-control" id="content" rows="6" name="description"><?=$description; ?></textarea>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit" name="topic-create">Создать категорию</button>
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