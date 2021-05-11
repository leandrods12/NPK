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
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-weight: bold;
        }

        table {
            border: solid 1px #aaa999;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table tr th {
            border: solid 1px #aaa999;
            padding: 5px 10px;
        }

        table tr td {
            border: solid 1px #aaa999;
            padding: 5px 10px;
            text-align: center;
        }

        table tr td:nth-child(1) {
            text-align: left;
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

    <?php

    require_once "myFunctions.php";

    $nivelArg = $_POST['teorArg'];
    $MO = round($_POST['MO'], 1);   // arredondando para 1 decimal
    $P = round($_POST['P']);        // arredondando para inteiro
    $K = round($_POST['K']);        // arredondando para inteiro

    $cultura = $_POST['cultura'];

    if ($nivelArg == "") {
        $MO = '';
        $P = '';
        $K = '';
    } elseif ($nivelArg == 1) {
        $msgArg = "Solo com argila: <15%";
    } elseif ($nivelArg == 2) {
        $msgArg = "Solo com argila: 15-35%";
    } elseif ($nivelArg == 3) {
        $msgArg = "Solo com argila: >35%";
    }

    list($classifMO, $classifP, $classifK) = classif($nivelArg, $MO, $P, $K);

    if ($cultura == "feijaoNT1") {
        list($qtdN, $qtdP, $qtdK) = DsgFeijaoNT1($classifMO, $classifP, $classifK);
        $msgCult = "Feijão (produtividade: Até 1,2 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 20 kg/ha. <br /> 
        A adubação nitrogenada de cobertura deve ser feita de 25 a 30 dias após a emergência.";
    } elseif ($cultura == "feijaoNT2") {
        list($qtdN, $qtdP, $qtdK) = DsgFeijaoNT1($classifMO, $classifP, $classifK);
        $msgCult = "Feijão (produtividade: Até 1,2-1,8 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 30 kg/ha. <br /> 
        A adubação nitrogenada de cobertura deve ser feita de 25 a 30 dias após a emergência";
    } elseif ($cultura == "feijaoNT3") {
        list($qtdN, $qtdP, $qtdK) = DsgFeijaoNT1($classifMO, $classifP, $classifK);
        $msgCult = "Feijão (produtividade: Até 1,8-2,5 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 30 kg/ha. <br /> 
        A adubação nitrogenada de cobertura deve ser parcelada em 20 e 30 dias após a emergência";
    } elseif ($cultura == "feijaoNT4") {
        list($qtdN, $qtdP, $qtdK) = DsgFeijaoNT1($classifMO, $classifP, $classifK);
        $msgCult = "Feijão (produtividade: Até 1,8-2,5 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 30 kg/ha. <br /> 
        A adubação nitrogenada de cobertura deve ser parcelada em 20 e 30 dias após a emergência";
    } elseif ($cultura == "milho1") {
        list($qtdN, $qtdP, $qtdK) = DsgMilho1($classifMO, $classifP, $classifK);
        $msgCult = "Milho (produtividade: 4-6 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 60 kg/ha. <br /> 
        Aplicada em dosagem única em regiões de chuvas regulares <br />
        quando a dosagem não ultrapassar 100 kg/ha.";
    } elseif ($cultura == "milho2") {
        list($qtdN, $qtdP, $qtdK) = DsgMilho2($classifMO, $classifP, $classifK);
        $msgCult = "Milho (produtividade: 6-8 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 100 kg/ha. <br /> 
        Aplicada em dosagem única em regiões de chuvas regulares <br />
        quando a dosagem não ultrapassar 100 kg/ha.";
    } elseif ($cultura == "milho3") {
        list($qtdN, $qtdP, $qtdK) = DsgMilho3($classifMO, $classifP, $classifK);
        $msgCult = "Milho (produtividade: >8 ton/ha)";
        $msgProd = "<b>N de cobertura:</b> 140 kg/ha. <br /> 
        Aplicada em dosagem única em regiões de chuvas regulares <br />
        quando a dosagem não ultrapassar 100 kg/ha.";
    }

    ?>

    <h2 style="text-align: center;">RELATÓRIO</h2>

    <?php echo $msgArg ?>

    <br />
    <br />

    <table  class="table table-striped">
        <tr>
            <th>Macronutriente</th>
            <th>Valor de entrada</th>
            <th>Valor arredondado<sup>a</sup></th>
            <th>Classificação<sup>b</sup></th>
        </tr>

        <tr>
            <td>Matéria orgânica (dag/Kg)</td>
            <td><?php echo $_POST['MO'] ?></td>
            <td><?php echo $MO ?></td>
            <td><?php echo $classifMO ?></td>
        </tr>

        <tr>
            <td>Fósforo (mg/dm<sup>3</sup>):</td>
            <td><?php echo $_POST['P'] ?></td>
            <td><?php echo $P ?></td>
            <td><?php echo $classifP ?></td>
        </tr>

        <tr>
            <td>Potássio (mg/dm<sup>3</sup>):</td>
            <td><?php echo $_POST['K'] ?></td>
            <td><?php echo $K ?></td>
            <td><?php echo $classifK ?></td>
        </tr>
    </table>
    <small><sup>a</sup> Valores arrendondados para adequada classificação nos intervalos tabelados.</small>
    <br />
    <small><sup>b</sup> Classificação para o estado de Minas Gerais.</small>
    <br />
    <br />

    <p>Formulação N-P-K em kg/ha a ser aplicada no sulco de plantio para <?php echo $msgCult; ?></p>

    <table  class="table table-striped">
        <tr>
            <td>N</td>
            <td>P<sub>2</sub>O<sub>5</sub></td>
            <td>K<sub>2</sub>O</td>
        </tr>
        <tr>
            <td><?php echo $qtdN; ?></td>
            <td><?php echo $qtdP; ?></td>
            <td><?php echo $qtdK; ?></td>
        </tr>
    </table>

    <br />
    <br />

    <?php
    echo $msgProd;
    ?>

    <br />
    <br />
    <br />
    <br />

    <?php
    $min = min($qtdN, $qtdP, $qtdK);
    $qtd0 = array($qtdN / $min, $qtdP / $min, $qtdK / $min);
    $qtd = $qtd0;
    $soma = array_sum($qtd0);
    ?>

    <table  class="table table-striped">

        <tr>
            <td>Fórmula de pesquisa<sup>c</sup></td>
            <td><?php echo $qtdN . "-" . $qtdP . "-" . $qtdK ?></td>
        </tr>
        <tr>
            <td>Fórmula mínima</td>
            <td><?php echo $qtdN / $min . "-" . $qtdP / $min . "-" . $qtdK / $min ?></td>
        </tr>

        <?php

        $i = 1;
        $chave = 1;
        while (true) {

            if ($soma > 54) {
                break;
            }

            if ($soma >= 24) {

                echo "<tr>";

                if ($chave == 1) {
                    echo "<td>Fórmula comercial teórica</td>";
                } elseif ($chave == 0) {
                    echo "<td></td>";
                }

                echo "<td>", $qtd[0] . "-" . $qtd[1] . "-" . $qtd[2], "</td>";
                echo "</tr>";

                $chave = 0;
            }

            $i = $i + 1;

            for ($j = 0; $j < 3; $j++) {
                $qtd[$j] = $i * $qtd0[$j];
            }

            $soma = array_sum($qtd);
        }

        ?>

    </table>
    <small><sup>c</sup> Formulação N-P-K em kg/ha.</small>

    <br></br>
    <br></br>
    <br></br>

    <footer>
        <p>ELM Consultoria</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>