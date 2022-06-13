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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="shortcut icon" href="/imagenes/android-chrome-192x192.svg" />
        <link href="estilos/oficio.css" rel="stylesheet" type="text/css">
        <script src="../JS/inicio.js"></script>
        <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
    </head>
    <body>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <div class="container">
            <?php
            encabezado();
            ?>
            <form method="post" action="Tercia.php">

                <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha">

                <input type="submit" name="submit" value="Quiero este dia"><br>

            </form>


            <?php
            if (empty($_SET)) {
                $separador = "\n"; // Usar salto de línea
                $post = (isset($_POST["fecha"]) && !empty($_POST["fecha"]));
                if ($post) {
                    $fecha1 = $_POST["fecha"];
                } else {
                    $fecha1 = (new DateTime())->format('Y-m-d');
                }

                $Nfecha = date("d/m/Y", strtotime($fecha1));
                echo"<h1>Tercia del día: " . $Nfecha . "</h1> ";
                $sql = "select * from tercia where fecha =\"$Nfecha\"";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    echo "<div class=\"padre\">";
                    ?>
                    <div class='hijo'>
                        <h3><?php $mostrar['dia']?></h3>
                        <center>
                            <h2><b>Inicio</b></h2><br> 
                            <p>Si Laudes es la primera oración del día se reza el Invitatorio Si no:<br>
                                ✝<br>
                                (se hace la señal de la cruz mientras se dice:)<br>
                                <br>
                                V/. -Dios mío, ven en mi auxilio.<br>
                                R/. -Señor, date prisa en socorrerme.<br>
                                Gloria al Padre, y al Hijo, y al Espíritu Santo.<br>
                                Como era en el principio, ahora y siempre,<br>
                                por los siglos de los siglos. Amén. Aleluya<br>
                            </p>
                        </center> 

                    </div>
                    <?php
                   
                    echo "<div class=\"hijo\">";
                    echo '<center><h2><b>Himno</b></h2></center>';
                    echo "<div class=\"hijo2\">";
                    $frases2 = explode($separador, $mostrar['himno']);
                    $tamaño2 = sizeof($frases2);
                    for ($i = 0; $i < $tamaño2; $i++) {
                        echo $frases2[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases3 = explode($separador, $mostrar['primer_salmo']);
                    $tamaño3 = sizeof($frases3);
                    echo '<center>';
                    echo '<h3><b>Primer Salmo</b></h3>';
                    echo '<h4><b>' . $frases3[0] . '</b></h4>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño3; $i++) {
                        echo $frases3[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases4 = explode($separador, $mostrar['segundo_salmo']);
                    $tamaño4 = sizeof($frases4);
                    echo '<center>';
                    echo '<h3><b>Segundo Salmo</b></h3>';
                    echo '<h3><b>' . $frases4[0] . '</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño4; $i++) {
                        echo $frases4[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases5 = explode($separador, $mostrar['tercer_salmo']);
                    $tamaño5 = sizeof($frases4);
                    echo '<center>';
                    echo '<h3><b>Tercer Salmo</b></h3>';
                    echo '<h3><b>' . $frases5[0] . '</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño5; $i++) {
                        echo $frases5[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases6 = explode($separador, $mostrar['lectura']);
                    $tamaño6 = sizeof($frases6);
                    echo '<br>';
                    echo '<center>';
                    echo "<div class=\"hijo2\">";
                    
                    echo '<h3><b> Lectura</b></h3>';
                    echo '</center>';
                    for ($i = 0; $i < $tamaño6; $i++) {
                        echo $frases6[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo'<br>';
                    echo '</div>';
                     echo '<div class="hijo"
                        <center>
                        <h3><b> Final</b></h3>
                        </center>
                        Oremos:<br>
                        Dios todopoderoso y eterno, que a la hora de tercia enviaste tu Espíritu Defensor a los Apóstoles, derrama también sobre nosotros ese mismo Espíritu de amor, para que, ante los hombres, demos siempre fiel testimonio de aquel amor que has querido que fuera el distintivo de los discípulos de tu Hijo. Que vive y reina por los siglos de los siglos.<br>
                        <center>
                        Amén<br>
                        
                         ✝<br>
                                (se hace la señal de la cruz mientras se dice:)<br>
                                <br>
                                </center>
                             V/.Bendigamos al Señor.<br>
                             R/. Demos gracias a Dios
                        
                        </div>
                    </div>';
                    echo '</div>';
                }
            }
            ?>
    </html>
    <?php
}