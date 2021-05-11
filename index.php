<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema Prototipo</title>
    <meta name="author" content="edmc">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: DarkGray">  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <p class="navbar-brand" ><i class="bi bi-calculator-fill"style="color: white" ></i>NPK-Calc</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--<ul class="navbar-nav mr-auto">-->
    <ul class="nav navbar-nav navbar-right">
        <?php

    // Sessao
    session_start();

        ?>
        <!--modal-->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>&nbsp; Bem vindo!</h4>
        </div>
        <div class="modal-body">
          Você deve estar logado para visualizar esta página.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
</div>
 <!--modal2-->
        <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>&nbsp; Bem vindo!</h4>
        </div>
        <div class="modal-body">
            <p><?php  echo "Bem-vindo " . $_SESSION['name'] . "!";?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
</div>

    <?php

    // Sessao
    //session_start();
    

    if (isset($_SESSION['valid'])) {?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('#myModal2').modal('show');
                    });
                </script>
            <?php 

        echo "<li class='nav-item'><a href='php_action/logout.php' class='nav-link' style='color: white'>Sair</a></li>";

        // Conexao
        require_once "php_action/connection.php";
        $result = mysqli_query($connect, "SELECT * FROM login");

        // echo "<a href='../view.php'>Adicionar propriedade<br/><br/></a>";
        echo "<li class='nav-item'><a href='addAnalise.php' class='nav-link' style='color: white'>Adicionar análise</a></li>";
        // echo "<a href='../view.php'>Verificar resultados<br/><br/></a>";
    } else { ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('#myModal').modal('show');
                    });
                </script>
            <?php 
        echo "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li><li> <a href='register.php' class='nav-link'>Registrar</a></li>";
    }

    ?>
        </ul>
    </div>
</div>
    </nav>
    <!--<div id="header">
        <p class="fs-4">Bem vindo ao NPK-Calc!</p>
    </div>-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="img/slide1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>A adubação deve ser feita quando as plantas necessitam dos nutrientes.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="img/slide2.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Não adube as plantas quando elas entram em dormência, pois nesse período elas não aproveitam muito os fertilizantes.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="img/slide3.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>A adubação ideal é aquela gradual e de acordo com a fase da planta. Por isso na hora de adubar, evite, por exemplo, de fertilizar perto da colheita.</h5>
      </div>
    </div>
  </div>
  <div class="container">
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
    
    <!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="img/slide2.jpg">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="img/slide2.jpg">
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="img/slide2.jpg">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div id="footer">
        <p>Criado por Éderson D'M. Costa, Leandro Dutra Simões e Marcos Celso Rodrigues.</p>
    </div>
</div>-->
        
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>