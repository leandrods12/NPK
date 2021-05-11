<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema Prototipo</title>
    <meta name="author" content="edmc">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color:  DarkGray;
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            background-color: snow;
            width: 500px;
            margin: auto;
            padding: 15px;
            border: 2px solid darkgray;
            border-radius: 6px;
        }

        h1 {
            text-align: center;
        }

        p {
            font-weight: bold;
        }

        #botao_id {
            width: 200px;
        }
        .form-select{
            height: 40px;
            font-size: medium;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
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

    <h1>Insira as informações</h1>

    <form action="processa.php" method="POST">

        <fieldset>

            <!--
            <legend>Macronutrientes</legend>
            -->

            <p>Macronutrientes</p>
            <table width="90%">
                <tr>
                    <td>Matéria orgânica (dag/Kg):</td>
                    <td><input type="float" name="MO" value="1.55" class="form-control"></td>
                </tr>
                <tr>
                    <td>Fósforo (mg/dm<sup>3</sup>):</td>
                    <td><input type=float name="P" value="6.0" class="form-control"></td>
                </tr>
                <tr>
                    <td>Potássio (mg/dm<sup>3</sup>):</td>
                    <td><input type="float" name="K" value="37" class="form-control"></td>
                </tr>
            </table>

            <br />

            <p>Selecione o teor de argila para o solo</p>
            <div class="form-check">
                <input type="radio" id="teor1" name="teorArg" value="1"  class="form-check-input" checked>
                <label for="teor1" class="form-check-label">Solos com argila: &lt15% </label>
                </div>
                <div class="form-check">
                <input type="radio" id="teor2" name="teorArg" value="2" class="form-check-input">
                <label for="teor2" class="form-check-label">Solos com argila: 15-35%</label>
                </div>
                <div class="form-check">
                <input type="radio" id="teor3" name="teorArg" value="3" class="form-check-input">
                <label for="teor3" class="form-check-label">Solos com argila: &gt35%</label>
            </div>

            <p>Selecione a cultura</p>
            <select name="cultura" class="form-select">

                <optgroup label="Feijão">
                    <option value="feijaoNT1">(Feijão) produtividade: Até 1,2 ton/ha</option>
                    <option value="feijaoNT2">(Feijão) produtividade: 1,2-1,8 ton/ha</option>
                    <option value="feijaoNT3">(Feijão) produtividade: 1,8-2,5 ton/ha</option>
                    <option value="feijaoNT3">(Feijão) produtividade: &gt2,5 ton/ha</option>
                </optgroup>

                <optgroup label="Milho em grão">
                    <option value="milho1">(Milho) produtividade: 4-6 ton/ha</option>
                    <option value="milho2">(Milho) produtividade: 6-8 ton/ha</option>
                    <option value="milho3">(Milho) produtividade: &gt8 ton/ha</option>
                </optgroup>

            </select>

            <br />
            <br />

            <input id="botao_id" type="submit" value="Enviar" class="btn btn-success">

        </fieldset>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>