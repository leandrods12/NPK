<!DOCTYPE html>
<html lang="" pt-br"">

<head>
    <title>Sistema Prototipo</title>
    <meta name="author" content="edmc">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet">
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
    <a href="index.php" class="nav-link">Home</a>
    </ul>
    </div>
    </div>
    </nav>
    <div class="center">
    <div class="caixa">

    <p>
        <font size="+2">Registrar</font>
    </p>

    <form action="php_action/create.php" method="POST">
        <div class= "form-group">
                <label for= "name">Nome completo:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class= "form-group">
               <label for="email">E-mail:</label> 
                <input class="form-control" type="text" name="email">
            </div>
           <div class= "form-group">
               <label for="username">Nome de usuário:</label> 
                <input class="form-control" type="text" name="username">
            </div>
            <div class= "form-group">
               <label for="password">Senha:</label> 
                <input class="form-control" type="password" name="password">
            </div>
            <div class= "form-group">
                <input type="submit" name="botaocadastrar" value="Enviar" class="btn btn-success">
            </div>
            
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>