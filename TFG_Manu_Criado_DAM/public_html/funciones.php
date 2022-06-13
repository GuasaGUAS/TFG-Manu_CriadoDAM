<?php

$conexion = mysqli_connect('localhost', 'id19000954_root', '^ze^mz8Blr=fWW@g', 'id19000954_tfg');

//if($conexion){
//    echo 'conectado a la base de datos';
//}else{
//    echo "no se a podido conectar";
//}
function iniciar() {
    session_start();
}

$separador = "\n";

function encabezado() {
    echo'<div class="row">
                    <div class="dropdown">
                        <ul>

                            <li><a class="link" href="Inicio.php">Inicio</a></li>
                            <li>
                                Liturgia de las horas
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                <ul>

                                    <li> <a class="link" href="Lecturas.php">Lecturas</a></li>
                                    <li><a class="link" href="Oficio.php">Oficio</a></li>
                                    <li><a class="link" href="Laudes.php">Laudes</a></li>
                                    <li><a class="link" href="Tercia.php">Tercia</a></li>
                                    <li><a class="link" href="Sexta.php">Sexta</a></li>
                                    <li><a  class="link" href="Nona.php">Nona</a></li>
                                    <li><a class="link" href="Visperas.php">Vísperas</a></li>
                                    <li><a class="link" href="Completas.php">Completas</a></li>
                                </ul>
                            </li>
                            <li>
                            Complementos
                           
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                 <ul>
                            <li><a class="link" href="Cancionero.php">Cancionero</a></li>
                            <li><a class="link" href="palabritas.php">Palabritas</a></li>
                            <li><a class="link" href="Santo.php">Santo del día</a></li>
                            </ul>
                            </li>

                           <li> <a  class="link" href="Logout.php" >
         cerrar sesion
        </a></li>
       

                            
                            
                        </ul>            
                    </div>
                </div>';
}
function encabezado2() {
    echo'<div class="row">
        <center>
                    <div class="dropdown">
                        <ul>

                            <li><a class="link" href="Inicio.php">Inicio</a></li>
                            <li>
                                Liturgia de las horas
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                <ul>

                                    <li> <a class="link" href="Lecturas.php">Lecturas</a></li>
                                    <li><a class="link" href="Oficio.php">Oficio</a></li>
                                    <li><a class="link" href="Laudes.php">Laudes</a></li>
                                    <li><a class="link" href="Tercia.php">Tercia</a></li>
                                    <li><a class="link" href="Sexta.php">Sexta</a></li>
                                    <li><a  class="link" href="Nona.php">Nona</a></li>
                                    <li><a class="link" href="Visperas.php">Vísperas</a></li>
                                    <li><a class="link" href="Completas.php">Completas</a></li>
                                </ul>
                            </li>
                            <li>
                            Complementos
                           
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                 <ul>
                            <li><a class="link" href="Cancionero.php">Cancionero</a></li>
                            <li><a class="link" href="palabritas.php">Palabritas</a></li>
                            <li><a class="link" href="Santo.php">Santo del día</a></li>
                            <li><a class="link" href="admini.php">Administrar</a></li>
                            </ul>
                            </li>
                           <li> <a  class="link" href="Logout.php" >
         cerrar sesion
        </a></li>
       

                            
                            
                        </ul>            
                    </div>
                    </center>
                </div>';
}
function alea() {
    $ima = array("imagenes/1.jpg", "imagenes/2.jpg", "imagenes/3.jpg", "imagenes/4.jpg", "imagenes/5.jpg", "imagenes/6.jpg", "imagenes/7.jpg", "imagenes/8.jpg", "imagenes/9.jpg");
    $max = sizeof($ima);
    $aleatorio = rand(0, $max - 1);
    echo $ima[$aleatorio];
}
