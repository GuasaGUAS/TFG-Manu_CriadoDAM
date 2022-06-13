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
            <form method="post" action="Oficio.php">

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
                echo"<h1>Laudes del día: " . $Nfecha . "</h1> ";
                $sql = "select * from oficio where fecha =\"$Nfecha\"";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    echo "<div class=\"padre\">";
                    ?>
                    <div class='hijo'>
                        <h3><?php $mostrar['dia']?></h3>
                        <center>
                            <h2><b>Inicio</b></h2><br> 
                            <p>

                                V/. -Señor, Ábreme los labios.<br>
                                R/. -Y mi boca proclmará tu alabanza.<br>
                               
                            </p>
                        </center> 

                    </div>
                    <?php
                    echo "<div class=\"hijo\">";
                    $frases1 = explode($separador, $mostrar['invitatorio']);
                    $tamaño1 = sizeof($frases1);
                    echo '<center>';
                    echo '<h3> <b> Invitatorio</b></h3>';
                    echo '<h4> <b>' . $frases1[0] . '</b></h4>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño1; $i++) {
                        echo $frases1[$i] . "<br>"; // invitatorio
                    }
                    echo "<div class=\"hijo\">";
                    echo '<center><h2><b>Himno</b></h2></center>';
                    echo "<div class=\"hijo2\">";
                    $frases2 = explode($separador, $mostrar['himno']);
                    $tamaño2 = sizeof($frases2);
                    for ($i = 0; $i < $tamaño2; $i++) {
                        echo $frases2[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases3 = explode($separador, $mostrar['primer_salmo']);
                    $tamaño3 = sizeof($frases3);
                    echo '<center>';
                    echo '<h3><b>' . $frases3[0] . '</b></h3>';
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
                    $tamaño5 = sizeof($frases5);
                    echo '<center>';
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
                    echo "<div class=\"hijo\">";
                    $frases7 = explode($separador, $mostrar['l_patristica']);
                    $tamaño7 = sizeof($frases7);
                    echo '<center>';
                    echo '<h3><b>Lesctura Patristica</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño7; $i++) {
                        echo $frases7[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';

                    echo "<div class=\"hijo\">";
                    if(!$mostrar['te_deum']==null){
                    $frases8 = explode($separador, $mostrar['te_deum']);
                    $tamaño8 = sizeof($frases8);
                    echo '<center>';
                    echo '<h3><b>Te deum</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño8; $i++) {
                        echo $frases8[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '</div>';
                     echo '<div class="hijo">
                        <center>
                        <h3><b> Final</b></h3>
                        </center>
                        Oremos:<br>
                        Dios todopoderoso, concédenos conservar siempre en nuestra vida y en nuestras costumbres la alegría de estas fiestas de Pascua que nos disponemos a clausurar. Por nuestro Señor Jesucristo, tu Hijo, que vive y reina contigo en la unidad del Espíritu Santo y es Dios por los siglos de los siglos.<br>
                        <center>
                        Amén<br>
                        
                         ✝<br>
                                (se hace la señal de la cruz mientras se dice:)<br>
                                <br>
                                </center>
                             V/.Bendigamos al Señor.<br>
                             R/.Demos gracias a Dios
                        
                        </div>
                    </div>';
                    }
                }
            }
            ?>
    </html>
    <?php
}