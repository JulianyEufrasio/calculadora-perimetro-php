<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Calculadora Financiamento</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="content">
        <div class="whodo">
            <h5>Exercício PHP - Formas Geométricas</h5>
            <p>Por Juliany Eufrásio e Barbara Mingatos</p>
        </div>

        <div class="divider"></div>

        <div class="main">
            <div class="head">
                <h4>Calculadora de perímetro</h4>
                <p>Escolha uma forma geométrica para calcular seu perímetro:</p>
            </div>

            <div class="grid-card">
                <!-- card retangulo -->
                <div class="card">
                    <div class="card-top">
                        <div class="retangulo"></div>
                        <h4>Retângulo</h4>
                    </div>
                    <button type="submit" id="btn-p-Retangulo"> Calcular perímetro</button>
                </div>

                <!-- card quadrado -->
                <div class="card">
                    <div class="card-top">
                        <div class="quadrado"></div>
                        <h4>Quadrado</h4>
                    </div>
                    <button type="submit" id="btn-p-Quadrado"> Calcular perímetro</button>
                </div>

                <!-- card paralelogramo -->
                <div class="card">
                    <div class="card-top">
                        <div class="paralelogramo"></div>
                        <h4>Paralelogramo</h4>
                    </div>
                    <button type="submit" id="btn-p-Paralelogramo"> Calcular perímetro</button>
                </div>

                <!-- card trapezio -->
                <div class="card">
                    <div class="card-top">
                        <div class="trapezio"></div>
                        <h4>Trapézio</h4>
                    </div>
                    <button type="submit" id="btn-p-Trapezio"> Calcular perímetro</button>
                </div>
            </div>
        </div>
    </main>


    <!-- modal formulario retangulo -->
    <div class="modal" id="modalRetangulo">
        <!-- content -->
        <div class="modal-content">
            <!-- header -->
            <div class="content-top">
                <div class="order-header-info">
                    <h3>Perímetro do retângulo:</h3>
                    <p>P = 2 * (h + b)</p>
                </div>
                <button class="close-modal-retangulo">
                    <i class="bx bx-x-circle"></i>
                </button>
            </div>

            <!-- FORMULARIO RET -->
            <form action="calculo.php" method="post">
                <div class="input-block">
                    <label for="altura-ret">Altura (h)</label>
                    <input type="text" name="alturaret" placeholder="Insira a altura aqui">
                </div>
                <div class="input-block">
                    <label for="base-ret">Base (b)</label>
                    <input type="text" name="baseret" placeholder="Insira a medida da base aqui">
                </div>

                <input type="submit" value="Calcular perímetro" name="calcRetangulo" class="btn">
            </form>
           
        </div>
    </div>

    <!-- modal formulario quadrado -->
    <div class="modal" id="modalQuadrado">
        <!-- content -->
        <div class="modal-content">
            <!-- header -->
            <div class="content-top">
                <div class="order-header-info">
                    <h3>Perímetro do quadrado:</h3>
                    <p>P = 4 * a</p>
                </div>
                <button class="close-modal-quadrado">
                    <i class="bx bx-x-circle"></i>
                </button>
            </div>

            <!-- FORMULARIO QUAD -->
            <form action="calculo.php" method="post">
                <div class="input-block">
                    <label for="altura-qua">Altura (a)</label>
                    <input type="text" name="alturaqua" placeholder="Insira a altura aqui">
                </div>

                <input type="submit" value="Calcular perímetro" name="calcQuadrado" class="btn">


            </form>
        </div>
    </div>

    <!-- modal formulario paralelogramo -->
    <div class="modal" id="modalParalelo">
        <!-- content -->
        <div class="modal-content">
            <!-- header -->
            <div class="content-top">
                <div class="order-header-info">
                    <h3>Perímetro do paralelogramo:</h3>
                    <p>P = 2 * (a + b)</p>
                </div>
                <button class="close-modal-paralelo">
                    <i class="bx bx-x-circle"></i>
                </button>
            </div>

            <!-- FORMULARIO PARALELO -->
            <form action="calculo.php" method="post">
                <div class="input-block">
                    <label for="lado-paralelo">Lado (a)</label>
                    <input type="text" name="ladoparalelo" placeholder="Insira a medida do lado aqui">
                </div>
                <div class="input-block">
                    <label for="base-paralelo">Base (b)</label>
                    <input type="text" name="baseparalelo" placeholder="Insira a medida da base aqui">
                </div>

                <input type="submit" value="Calcular perímetro" name="calcParalelo" class="btn">
            </form>
        </div>
    </div>

    <!-- modal formulario trapezio -->
    <div class="modal" id="modalTrapezio">
        <!-- content -->
        <div class="modal-content">
            <!-- header -->
            <div class="content-top">
                <div class="order-header-info">
                    <h3>Perímetro do trapézio:</h3>
                    <p>P = a + b + c + B</p>
                </div>
                <button class="close-modal-trapezio">
                    <i class="bx bx-x-circle"></i>
                </button>
            </div>

            <!-- FORMULARIO TRAPEZIO -->
            <form action="calculo.php" method="post">
                <div class="input-block">
                    <label for="lado-a-trap">Lado (a)</label>
                    <input type="text" name="ladoatrap" placeholder="Insira a medida do lado 'a' aqui">
                </div>
                <div class="input-block">
                    <label for="lado-b-paralelo">Lado (b)</label>
                    <input type="text" name="ladobtrap" placeholder="Insira a medida do lado 'b' aqui">
                </div>
                <div class="input-block">
                    <label for="lado-c-paralelo">Lado (c)</label>
                    <input type="text" name="ladoctrap" placeholder="Insira a medida do lado 'c' aqui">
                </div>
                <div class="input-block">
                    <label for="base-b-paralelo">Base (B)</label>
                    <input type="text" name="basebtrap" placeholder="Insira a medida da base 'B' aqui">
                </div>

                <input type="submit" value="Calcular perímetro" name="calcTrapezio" class="btn">
            </form>
        </div>
    </div>




</body>

</html>

<!-- script modais -->
<script>
    // modal formulario retangulo
    var modalRetangulo = document.getElementById("modalRetangulo");
    var btnpRetangulo = document.getElementById("btn-p-Retangulo");
    var cloosemodalRetangulo = document.getElementsByClassName("close-modal-retangulo")[0];
    btnpRetangulo.onclick = function () {
        modalRetangulo.style.display = "block";
    }
    cloosemodalRetangulo.onclick = function () {
        modalRetangulo.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modalRetangulo) {
            modalRetangulo.style.display = "none";
        }
    }

    // modal formulario quadrado
    var modalQuadrado = document.getElementById("modalQuadrado");
    var btnpQuadrado = document.getElementById("btn-p-Quadrado");
    var clooseModalQuadrado = document.getElementsByClassName("close-modal-quadrado")[0];
    btnpQuadrado.onclick = function () {
        modalQuadrado.style.display = "block";
    }
    clooseModalQuadrado.onclick = function () {
        modalQuadrado.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modalQuadrado) {
            modalQuadrado.style.display = "none";
        }
    }

    // modal formulario paralelogramo
    var modalParalelo = document.getElementById("modalParalelo");
    var btnpParalelo = document.getElementById("btn-p-Paralelogramo");
    var cloosemodalParalelo = document.getElementsByClassName("close-modal-paralelo")[0];
    btnpParalelo.onclick = function () {
        modalParalelo.style.display = "block";
    }
    cloosemodalParalelo.onclick = function () {
        modalParalelo.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modalParalelo) {
            modalParalelo.style.display = "none";
        }
    }

    // modal formulario trapezio
    var modalTrapezio = document.getElementById("modalTrapezio");
    var btnpTrapezio = document.getElementById("btn-p-Trapezio");
    var cloosemodalTrapezio = document.getElementsByClassName("close-modal-trapezio")[0];
    btnpTrapezio.onclick = function () {
        modalTrapezio.style.display = "block";
    }
    cloosemodalTrapezio.onclick = function () {
        modalTrapezio.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modalTrapezio) {
            modalTrapezio.style.display = "none";
        }
    }
</script>