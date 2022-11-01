<?php  include_once("includes.php");?> 
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css">

    <title>Hello World!</title>
  </head>
  <body>
    
  <div class="row">
    <div class="col-sm-5 offset-md-3">
        <?php
            $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
            $dir = "pags/";
            $ext = ".php";

            if(file_exists($dir.$url.$ext)) {
                include($dir.$url.$ext);
            }else {
                echo "<div class='alert alert-danger'>Página não encontrada</div>";
            }

        ?>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

  </body>
</html>