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
            <form method="post" action="Completas.php">

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
                echo"<h1>Completas del día: " . $Nfecha . "</h1> ";
                $sql = "select * from completas where fecha =\"$Nfecha\"";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    echo "<div class=\"padre\">";
                    ?>
                    <div class='hijo'>
                        <h3><?php $mostrar['dia']?></h3>
                        <center>
                            <h2><b>Inicio</b></h2><br> 
                            <p>
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
                     echo '<center><h2><b>Examen de Conciencia</b></h2></center>';
                    echo "<div class=\"hijo2\">";
                    $frases1= explode($separador, $mostrar['examen']);
                    $tamaño1 = sizeof($frases1);
                    echo '<center>';
                    echo '<h3> <b> Examen de conciencia</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño1; $i++) {
                        echo $frases1[$i] . "<br>"; 
                    }
                    echo "<div class=\"hijo\">";
                    echo '<center><h2><b>Himno</b></h2></center>';
                    echo "<div class=\"hijo2\">";
                    $frases2 = explode($separador, $mostrar['himno']);
                    $tamaño2 = sizeof($frases2);
                    for ($i = 0; $i < $tamaño2; $i++) {
                        echo $frases2[$i] . "<br>";
                    }
                    echo '</div>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    $frases3 = explode($separador, $mostrar['primer_salmo']);
                    $tamaño3 = sizeof($frases3);
                    echo '<center>';
                    echo '<h3><b>' . $frases3[0] . '</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño3; $i++) {
                        echo $frases3[$i] . "<br>";
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
                    $frases7 = explode($separador, $mostrar['cantico_evangelico']);
                    $tamaño7 = sizeof($frases7);
                    echo '<center>';
                    echo '<h3><b>Cantico Evangelico</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño7; $i++) {
                        echo $frases7[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '<div class="hijo"
                        <center>
                        <h3><b> Final</b></h3>
                        </center>
                        Oremos:<br>
                        Señor, Dios todo poderoso: ya que con nuestro descanso vamos a imitar a tu Hijo
                        que reposó en el sepulcro, te pedimos, que, al levantarnos mañana, le imitemos también resucitando a una nueva vida. Por Jesucristo nuestro Señor.<br>
                        <center>
                        Amén<br>
                        
                         ✝<br>
                                (se hace la señal de la cruz mientras se dice:)<br>
                                <br>
                                </center>
                             V/. El señor todopoderoso no conceda una noche tranquila y una muerte santa.<br>
                             R/.Amén
                        
                        </div>
                    </div>';
                    echo '</div>';

                   
                }
            }
            ?>
    </html>
    <?php
}