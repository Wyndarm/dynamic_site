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

    <!-- Main -->
    <div class="container">
      <div class="content row">
        <div class="main-content col-md-9 col-12">
          <h2>Очень длинный заголовок для какой-то очень непонятной статьи</h2>

          <div class="single_post row">
            <div class="img col-12">
              <img src="./assets/images/image_1.png" class="img-thumbnail" alt="">
            </div>
            <div class="info">
                <i class="far fa-user">Имя Автора</i>
                <i class="far fa-calendar">Ma 11, 2019</i>
            </div>
            <div class="single_post_text col-12">
                <h3>Заголовок третьего уровня</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione modi error rerum possimus animi! Eos!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat at molestias vitae! Ipsa
                    repudiandae praesentium nobis nesciunt, <a href="#"> pariatur</a> tenetur commodi! Iste sequi placeat dolores nulla,
                    expedita voluptas officiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, facere iste! Ex quia hic recusandae
                    optio velit ad consectetur totam sed sunt quasi voluptates, sequi molestias alias sapiente iste asperiores
                    nostrum est voluptatem quae earum accusantium. Totam dolorem possimus rem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione modi error rerum possimus animi! Eos!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat at molestias vitae! Ipsa
                    repudiandae praesentium nobis nesciunt, iusto pariatur tenetur commodi! Iste sequi placeat dolores nulla,
                    expedita voluptas officiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, facere iste! Ex quia hic recusandae
                    optio velit ad consectetur totam sed sunt quasi voluptates, sequi molestias alias sapiente iste asperiores
                    nostrum est voluptatem quae earum accusantium. Totam dolorem possimus rem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione modi error rerum possimus animi! Eos!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat at molestias vitae! Ipsa
                    repudiandae praesentium nobis nesciunt, iusto pariatur tenetur commodi! Iste sequi placeat dolores nulla,
                    expedita voluptas officiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, facere iste! Ex quia hic recusandae
                    optio velit ad consectetur totam sed sunt quasi voluptates, sequi molestias alias sapiente iste asperiores
                    nostrum est voluptatem quae earum accusantium. Totam dolorem possimus rem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione modi error rerum possimus animi! Eos!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat at molestias vitae! Ipsa
                    repudiandae praesentium nobis nesciunt, iusto pariatur tenetur commodi! Iste sequi placeat dolores nulla,
                    expedita voluptas officiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, facere iste! Ex quia hic recusandae
                    optio velit ad consectetur totam sed sunt quasi voluptates, sequi molestias alias sapiente iste asperiores
                    nostrum est voluptatem quae earum accusantium. Totam dolorem possimus rem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione modi error rerum possimus animi! Eos!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat at molestias vitae! Ipsa
                    repudiandae praesentium nobis nesciunt, iusto pariatur tenetur commodi! Iste sequi placeat dolores nulla,
                    expedita voluptas officiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, facere iste! Ex quia hic recusandae
                    optio velit ad consectetur totam sed sunt quasi voluptates, sequi molestias alias sapiente iste asperiores
                    nostrum est voluptatem quae earum accusantium. Totam dolorem possimus rem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nisi.</p>
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