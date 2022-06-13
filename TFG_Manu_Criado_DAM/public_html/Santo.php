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
        
    <?php
    if (isset($_POST)) {

        $dia = (new DateTime())->format('Y-m-d')
        ?>
            <form method="post" action="Santo.php">

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
        echo"<h1>El Santo del día: " . $Nfecha . " es :</h1> ";
        $sql = "select * from santo where fecha =\"$Nfecha\"";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
            echo "<h3><b>" . $mostrar['nombre'] . "</b></h3>";
            echo '<br>';
            echo "<p>" . $mostrar['vida'] . "</p>";
        }
    }
    ?>
        </div>
    </body>    
    </html>
        <?php
}

        }