<?php
  include("path.php");
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

    <!-- Slider -->
    <div class="container">
      <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/image_1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack d-none d-md-block">
              <h5><a href="#">First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/images/image_2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack d-none d-md-block">
              <h5><a href="#">Second slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <img src="./images/image_3.png" class="d-block w-100" alt="..."> -->
            <img src="./assets/images/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack d-none d-md-block">
              <h5><a href="#">Third slide label</a></h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Main -->
    <div class="container">
      <div class="content row">
        <div class="main-content col-md-9 col-12">
          <h2>Последние публикации</h2>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="./assets/images/image_small.png" class="img-thumbnail" alt="">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class="far fa-user">Имя Автора</i>
              <i class="far fa-calendar">Ma 11, 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus nibh nec dignissim aliquam.
              </p>
            </div>
          </div>
        </div>
        


        <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Поиск</h3>
            <form action="intex.html" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
            </form>
          </div>

          <div class="section topics">
            <h3>Категории</h3>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Fiction</a></li>
              <li><a href="#">Biography</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Inspiration</a></li>
              <li><a href="#">Life Lessons</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php
    include("./app/include/footer.php");
    ?>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>

</html>