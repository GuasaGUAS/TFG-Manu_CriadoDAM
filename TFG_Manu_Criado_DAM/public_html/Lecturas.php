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
            <form method="post" action="Lecturas.php">

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
                echo"<h1>Lecturas del día: " . $Nfecha . "</h1> ";
                $sql = "select * from evangelio where fecha =\"$Nfecha\"";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    echo "<div class=\"padre\">";
                    ?>
                    
                    <?php
                    echo "<div class=\"hijo\">";
                    $frases1 = explode($separador, $mostrar['primera']);
                    $tamaño1 = sizeof($frases1);
                    echo '<center>';
                    echo '<h3> <b>Primera lectura </b></h3>';
                    
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño1; $i++) {
                        echo $frases1[$i] . "<br>"; // invitatorio
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    echo '<center><h2><b>Salmo</b></h2></center>';
                    echo "<div class=\"hijo2\">";
                    $frases2 = explode($separador, $mostrar['salmo']);
                    $tamaño2 = sizeof($frases2);
                    for ($i = 0; $i < $tamaño2; $i++) {
                        echo $frases2[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    echo "<div class=\"hijo\">";
                    if(!$mostrar['segunda']==null){
                    $frases3 = explode($separador, $mostrar['segunda']);
                    $tamaño3 = sizeof($frases3);
                    echo '<center>';
                    echo '<h3><b>Segunda lectura</b></h3>';
                    echo '</center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 0; $i < $tamaño3; $i++) {
                        echo $frases3[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                    }
                    echo "<div class=\"hijo\">";
                    $frases5 = explode($separador, $mostrar['evangelio']);
                    $tamaño5 = sizeof($frases5);
                    echo '<center><h3><b>evangelio</b></h3></center>';
                    echo "<div class=\"hijo2\">";
                    for ($i = 1; $i < $tamaño5; $i++) {
                        echo $frases5[$i] . "<br>"; // porción1
                    }
                    echo '</div>';
                    echo '</div>';
                   
                    echo '</div>';
                }
            }
            ?>
    </html>
    <?php
}

                   