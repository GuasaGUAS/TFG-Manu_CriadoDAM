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
            <link href="estilos/principio.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
            <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
        </head>
        <body>
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            <div class="container">
                <?php
                encabezado2();
                ?>


                <div class="form-group">
                    <form method="post" action="modi.php">
                        <label >¿Que quieres hacer?</label>
                        <select class="form-control"  name="editar">
                            <option >--Seleciona una opción</option>
                            <option value="Insertar">Insertar</option>
                            <option value="Editar">Editar</option>
                        </select>
                </div>
                <div class="form-group">
                    <label >¿Que quieres modificar?</label>
                    <select class="form-control"  name="cambiar">
                        <option >--Seleciona una opción</option>
                        <option value="Lecturas">Lecturas</option>
                        <option value="Oficio">Oficio</option>
                        <option value="Laudes">Laudes</option>
                        <option  value="Tercia">Tercia</option>
                        <option value="Sexta">Sexta</option>
                        <option value="Nona">Nona</option>
                        <option value="Visperas">Visperas</option>
                        <option value="Completas">Completas</option>
                        <option  value="Cancionero">Cancionero</option>
                        <option value="Palabritas">Palabritas</option>
                        <option value="Completas">Completas</option>
                        <option value="Santos">Santos</option>
                        
                    </select>
                </div> <br>
                <input type="submit" ><br>

                </form>

            </div>    

        </body>
    </html>
    <?php
}
