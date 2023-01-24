<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{ background-color: ivory; }
.game {
  width: 50px;
  height: 20px;
  background-color: lightgrey;
  margin: 2px;

}
.game:after {
  content: 'game';
}
.container {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height:384px;
  float:left;
}
    </style>
</head>
<body>
    <?php 
        require 'views/headeradmin.php';
    ?>
    <h1>aca aparecerán las llaves</h1>
    <div class="row">
  <!--Round 1-->
  <div class="container col-sm-1">
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
  </div>
  <!--Round 2-->
  <div class="container col-sm-1">
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
  </div>
  <!--Round 3-->
  <div class="container col-sm-1">
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
    <div class="game"></div>
  </div>
  <!--Round 4-->
  <div class="container col-sm-1">
    <div class=game></div>
    <div class=game></div>
  </div>
  <!--Round 5-->
  <div class="container col-sm-1">
    <div class=game></div>
  </div>
</div>
    <?php

        require 'views/footeradmin.php';
    ?>
    
</body>
</html>