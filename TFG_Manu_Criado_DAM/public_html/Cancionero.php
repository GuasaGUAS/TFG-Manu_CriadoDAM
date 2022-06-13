<?php
include "funciones.php";
iniciar();
if (!isset($_SESSION["Login"])) {
    header('Location: index.php');
} else {
    ?>
        <!doctype html>
    <html
        <head>
        <!-- CSS only -->
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="shortcut icon" href="/imagenes/android-chrome-192x192.svg" />
        <link href="estilos/cancionero.css" rel="stylesheet" type="text/css">
        <script src="JS/scrol.js"></script>
        <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
        <script src=" http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <div class="container">
            <?php
            encabezado();
            ?>
            <div class="ir-arriba">
                <i class="fa-solid fa-up"></i>
            </div>
                <?php
                $separador = "\n"; // Usar salto de línea

                $sql = "select * from cancionero";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    echo "<div class=\"padre\">";
                    echo "<div class=\"hijo\">";
                    echo "<center>";

                    echo "<h1> <b>" . $mostrar['nombre'] . "</b></h1>";
                    echo '</center>';
                    $frases = explode($separador, $mostrar['cancion']);
                    $tamaño = sizeof($frases);
                    for ($i = 0; $i < $tamaño; $i++) {
                        echo $frases[$i] . "<br>"; // porción1
                    }
                    echo"</div>";
                    echo"</div>";
                }

                echo " </div> 
                 <div id='button-up'>
        <i class='fas fa-chevron-up'></i>
    </div>
";
                echo"       </body>    ";
                echo "   </html>";
            }
        
        
