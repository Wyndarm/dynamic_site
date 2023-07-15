<?php 
  include("../../path.php");
  include("../../app/controllers/posts.php");
?>

<!doctype html>
<html lang="ru">
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
                    <h2>Добавление записи</h2>
                </div>
                <div class="row add-post">
                    <form action="create.php" method="post">
                        <div class="col mb-4">
                            <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                        </div>
                        <div class="col mb-4">
                            <label for="editor" class="form-label">Содержимое записи</label>
                            <textarea name="content" class="form-control" id="editor" rows="10"></textarea>
                        </div>
                        <div class="input-group col mb-4">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <select name="topic" class="form-select mb-4" aria-label="Default select example">
                            <option selected>Категория записи</option>
                            <?php foreach($topics as $key => $topic): ?>
                                <option value="<?=$topic['id'] ;?>"><?=$topic['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-check">
                            <input name="publish" type="checkbox" class="form-check-input" name="publish" id="publish" value="1">
                            <label for="publish" class="form-check-label">Publish</label>
                        </div>
                        <div class="col col-6">
                            <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
  </body>

</html>