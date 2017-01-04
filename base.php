<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo2_PHP</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <div class="container-fluid">

    <div class="row">
      <?php
        for ($i=1; $i <=12 ; $i++) {
          echo "<div class=\"col-xs-6 col-sm-4 col-md-3\">
            <img src=\"images/img$i.png\" class=\"img-responsive images\">
          </div>";
        }
       ?>

    </div>
        </div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</html>
