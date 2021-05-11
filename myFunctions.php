<?php

function classif($nivelArg, $MO, $P, $K)
{
    // ======================================================
    // Classificacao MO

    if (($MO >= 0) && ($MO <= 1.5)) {
        $classifMO  = "baixo";
    } elseif (($MO >= 1.6) && ($MO <= 3.0)) {
        $classifMO  = "médio";
    } elseif ($MO > 3.0) {
        $classifMO  = "alto";
    }

    // ======================================================
    // Classificacao P

    if ($nivelArg == 1) {

        // ==================================
        // solo c/ argila: < 15%

        if (($P >= 0) && ($P <= 10)) {
            $classifP = "baixo";
        } elseif (($P >= 11) && ($P <= 20)) {
            $classifP = "médio";
        } elseif ($P > 20) {
            $classifP = "alto";
        }
        // ==================================

    } elseif ($nivelArg == 2) {

        // ==================================
        // solo c/ argila: 15-35%

        if (($P >= 0) && ($P <= 20)) {
            $classifP = "baixo";
        } elseif (($P >= 21) && ($P <= 30)) {
            $classifP = "médio";
        } elseif ($P > 30) {
            $classifP = "alto";
        }
        // ==================================


    } elseif ($nivelArg == 3) {

        // ==================================
        // solo c/ argila: > 35%

        if (($P >= 0) && ($P <= 5)) {
            $classifP = "baixo";
        } elseif (($P >= 6) && ($P <= 10)) {
            $classifP = "médio";
        } elseif ($P > 10) {
            $classifP = "alto";
        }
        // ==================================

    }

    // ======================================================
    // Classificacao K

    if (($K >= 0) && ($K <= 45)) {
        $classifK = "baixo";
    } elseif (($K >= 46) && ($K <= 80)) {
        $classifK = "médio";
    } elseif ($K > 80) {
        $classifK = "alto";
    }
    // ======================================================

    return array($classifMO, $classifP, $classifK);
}

function DsgFeijaoNT1($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = 20;
    } else {
        if ($classifMO == "médio") {
            $qtdN = 20;
        } else {
            if ($classifMO == "alto") {
                $qtdN = 20;
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 70;
    } else {
        if ($classifP == "médio") {
            $qtdP = 50;
        } else {
            if ($classifP == "alto") {
                $qtdP = 30;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 30;
    } else {
        if ($classifK == "médio") {
            $qtdK = 20;
        } else {
            if ($classifK == "alto") {
                $qtdK = 20;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgFeijaoNT2($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = 20;
    } else {
        if ($classifMO == "médio") {
            $qtdN = 20;
        } else {
            if ($classifMO == "alto") {
                $qtdN = 20;
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 80;
    } else {
        if ($classifP == "médio") {
            $qtdP = 60;
        } else {
            if ($classifP == "alto") {
                $qtdP = 40;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 30;
    } else {
        if ($classifK == "médio") {
            $qtdK = 20;
        } else {
            if ($classifK == "alto") {
                $qtdK = 20;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgFeijaoNT3($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = 30;
    } else {
        if ($classifMO == "médio") {
            $qtdN = 30;
        } else {
            if ($classifMO == "alto") {
                $qtdN = 30;
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 90;
    } else {
        if ($classifP == "médio") {
            $qtdP = 70;
        } else {
            if ($classifP == "alto") {
                $qtdP = 50;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 40;
    } else {
        if ($classifK == "médio") {
            $qtdK = 30;
        } else {
            if ($classifK == "alto") {
                $qtdK = 20;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgFeijaoNT4($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = 40;
    } else {
        if ($classifMO == "médio") {
            $qtdN = 40;
        } else {
            if ($classifMO == "alto") {
                $qtdN = 40;
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 110;
    } else {
        if ($classifP == "médio") {
            $qtdP = 90;
        } else {
            if ($classifP == "alto") {
                $qtdP = 70;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 50;
    } else {
        if ($classifK == "médio") {
            $qtdK = 40;
        } else {
            if ($classifK == "alto") {
                $qtdK = 20;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgMilho1($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = "10/20";
    } else {
        if ($classifMO == "médio") {
            $qtdN = "10/20";
        } else {
            if ($classifMO == "alto") {
                $qtdN = "10/20";
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 80;
    } else {
        if ($classifP == "médio") {
            $qtdP = 60;
        } else {
            if ($classifP == "alto") {
                $qtdP = 30;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 50;
    } else {
        if ($classifK == "médio") {
            $qtdK = 40;
        } else {
            if ($classifK == "alto") {
                $qtdK = 20;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgMilho2($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = "10/20";
    } else {
        if ($classifMO == "médio") {
            $qtdN = "10/20";
        } else {
            if ($classifMO == "alto") {
                $qtdN = "10/20";
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 10;
    } else {
        if ($classifP == "médio") {
            $qtdP = 80;
        } else {
            if ($classifP == "alto") {
                $qtdP = 50;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 70;
    } else {
        if ($classifK == "médio") {
            $qtdK = 60;
        } else {
            if ($classifK == "alto") {
                $qtdK = 40;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}

function DsgMilho3($classifMO, $classifP, $classifK)
{
    // ======================================================
    if ($classifMO == "baixo") {
        $qtdN = "10/20";
    } else {
        if ($classifMO == "médio") {
            $qtdN = "10/20";
        } else {
            if ($classifMO == "alto") {
                $qtdN = "10/20";
            }
        }
    }

    // ============================================
    if ($classifP == "baixo") {
        $qtdP = 120;
    } else {
        if ($classifP == "médio") {
            $qtdP = 100;
        } else {
            if ($classifP == "alto") {
                $qtdP = 70;
            }
        }
    }

    // ============================================
    if ($classifK == "baixo") {
        $qtdK = 90;
    } else {
        if ($classifK == "médio") {
            $qtdK = 80;
        } else {
            if ($classifK == "alto") {
                $qtdK = 60;
            }
        }
    }

    // ============================================
    return array($qtdN, $qtdP, $qtdK);
}
