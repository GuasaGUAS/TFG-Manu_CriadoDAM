<?php
include "funciones.php";
iniciar();
if (!isset($_SESSION["Login"])) {
    header('Location: index.php');
} else {
    ?>
        <!doctype html>
        <html>
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
            <div class="padre" id="aba"><div class="hijo">
                    <center>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php alea(); ?>" alt="Card image cap">
  <div class="card-body">
      <center><h5 class="card-title">Palabrita de vida</h5></center>
    <p class="card-text"><?php
                $sql = "select * from palabritas";
    $result = mysqli_query($conexion, $sql);
    $palabras = array();
    while ($mostrar = mysqli_fetch_array($result)) {
        array_push($palabras, $mostrar['palabra']);
    }
    $x = sizeof($palabras);
    $ale = rand(0,($x-1));
    echo"<center><p>" . $palabras[$ale] . "</p></center>"
    ?></p>
    <center> <a href="palabritas.php" class="btn btn-primary">Quiero otra palabrita</a></center>
  </div>
</div>
               
   
            </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}