<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Carousel Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" >
    <link href="<?= base_url("bootstrap/css/carousel.css")?>" rel="stylesheet" >
    
    <?php 
            foreach ($css_files as $css){
                echo "<link rel='stylesheet' href='$css' />";
            }
    ?>

  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
<!--          $this->router->class, vê qual rota está sendo usada. Se rota = site, escreva active, senão não escreva nada.-->
          <li class="nav-item <?= $this->router->class == "site" ? "active" : "" ?>">
          <a class="nav-link" href="<?= site_url("site/index") ?>">Site <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= $this->router->class == "categoria" ? "active" : "" ?>">
          <a class="nav-link" href="<?= site_url("categoria/index") ?>">Categoria</a>
        </li>
        <li class="nav-item <?= $this->router->class == "noticia" ? "active" : "" ?>">
          <a class="nav-link" href="<?= site_url("noticia/index") ?>">Notícias</a>
        </li>
        <li class="nav-item <?= $this->router->class == "user" ? "active" : "" ?>">
          <a class="nav-link" href="<?= site_url("user/index") ?>">Usuário</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?= site_url("logout/index") ?>">Sair</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

      
<!-- Início do Conteúdo-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
<!--            esta variável contents existe quando carrega o a biblioteca template-->
            <?=  $contents ?>
        </div>
    </div>
</div>


  
<!-- Fim do coneúdo.-->

  
  


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<?php 
            foreach ($js_files as $js){
                echo "<script src='$js'></script>";
            }
?>
<script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js") ?>"></script>
<script>window.jQuery || document.write('<script src="<?= base_url("bootstrap/js/jquery.slim.min.js")?>"><\/script>')</script>
      <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script></body>
</html>
