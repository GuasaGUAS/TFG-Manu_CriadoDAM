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

                if (isset($_POST['editar']) && $_POST['cambiar']) {
                    $edi = $_POST['editar'];
                    $camb = $_POST['cambiar'];
                    if ($edi == 'Insertar') {
                        if ($camb == 'Lecturas') {
                            ?>
                            <br>
                            <div class="form-group">
                                <form method="post" action="chage.php?valor=1">
                                    <div class="form-group">
                                        <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <textarea name="primera" class="form-control" rows="10" cols="200" placeholder="Introduce la primera"></textarea>
                                        <br>
                                        <textarea name="salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el salmo"></textarea>
                                        <br>
                                        <textarea name="Segunda" class="form-control" rows="10" cols="200" placeholder="Introduce la segunda lectura"></textarea>
                                        <br>
                                        <textarea name="evangelio" class="form-control" rows="10" cols="200" placeholder="Introduce el evangelio"></textarea>
                                    </div>
                            </div>
                            <br>
                            <input type="submit" style="float: left;"><br>
                            <input type="reset" value="Reset" style="float: right;">

                            </form>

                        </div>    
                        <?php
                    } elseif ($camb == "Oficio") {
                        ?>
                        <br>
                        <div class="form-group">
                            <form method="post" action="chage.php?valor=2">
                                <div class="form-group">
                                    <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                                    <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea name="invitatorio" class="form-control" rows="10" cols="200" placeholder="Introduce Invitatorio"></textarea>
                                    <br>
                                    <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                                    <br>
                                    <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                                    <br>
                                    <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                                    <br>
                                    <textarea name="tercer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el tercer salmo"></textarea>
                                    <br>
                                    <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>
                                    <br>
                                    <textarea name="l_patristica" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura patristica"></textarea>
                                    <br>
                                    <textarea name="te_deum" class="form-control" rows="10" cols="200" placeholder="Introduce el te deum"></textarea>
                                </div>
                        </div>
                        <br>
                        <input type="submit" style="float: left;"><br>
                        <input type="reset" value="Reset" style="float: right;">

                    </form>

                </div>    
                <?php
            } elseif ($camb == "Laudes") {
                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=3">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="invitatorio" class="form-control" rows="10" cols="200" placeholder="Introduce Invitatorio"></textarea>
                            <br>
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="cantico_at" class="form-control" rows="10" cols="200" placeholder="Introduce el cantico at"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>
                            <br>
                            <textarea name="cantico_evangelico" class="form-control" rows="10" cols="200" placeholder="Introduce el cantico evangelico"></textarea>
                            <br>
                            <textarea name="preces" class="form-control" rows="10" cols="200" placeholder="Introduce las preces"></textarea>
                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php
            } elseif ($camb = "Tercia") {
                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=4">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                             </div>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                       
                        <br>
                        <div class="form-group">
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                            <br>
                            <textarea name="tercer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el tercer salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>

                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php
            } elseif ($camb == "Sexta") {
                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=5">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                            <br>
                            <textarea name="tercer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el tercer salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>

                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php
            }elseif($camb=="Nona"){
               ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=6">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                            <br>
                            <textarea name="tercer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el tercer salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>

                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php 
            }elseif ($camb=="Visperas") {
                                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=7">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="invitatorio" class="form-control" rows="10" cols="200" placeholder="Introduce Invitatorio"></textarea>
                            <br>
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="cantico_at" class="form-control" rows="10" cols="200" placeholder="Introduce el cantico at"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="segundo_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el segundo salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>
                            <br>
                            <textarea name="l_patristica" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura patristica"></textarea>
                            <br>
                            <textarea name="cantico_evangelico" class="form-control" rows="10" cols="200" placeholder="Introduce el cantico evangelico"></textarea>
                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php
                            }elseif($camb=="Completas"){
                                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=8">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="dia"  placeholder="Introduce el día"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="examen" class="form-control" rows="10" cols="200" placeholder="Introduce el examen"></textarea>
                            <br>
                            <textarea name="himno" class="form-control" rows="10" cols="200" placeholder="Introduce el himno"></textarea>
                            <br>
                            <textarea name="primer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce primer salmo"></textarea>
                            <br>
                            <textarea name="lectura" class="form-control" rows="10" cols="200" placeholder="Introduce la lectura"></textarea>
                            <br>
                            <textarea name="tercer_salmo" class="form-control" rows="10" cols="200" placeholder="Introduce el canto evangelico></textarea>
                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php 
                            } elseif ($camb=="Cancionero") {
                                               ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=9">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" name="nombre"  placeholder="Introduce el nombre de la cancion"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="cancion" class="form-control" rows="10" cols="200" placeholder="Introduce la cancion"></textarea>
                            
                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php 
                            }elseif ($camb=="Santos") {
                         
                                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=10">
                        <div class="form-group">
                            <input type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" name="fecha" id="fecha"><br>
                            <input type="text" class="form-control" name="nombre"  placeholder="Introduce el nombre del Santo"><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="vida" class="form-control" rows="10" cols="200" placeholder="Introduce la vida"></textarea>
                           
                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php 
                            }elseif ($camb=="Palabritas") {
                                ?>
                <br>
                <div class="form-group">
                    <form method="post" action="chage.php?valor=11">
                        <br>
                        <div class="form-group">
                            <textarea name="palabrita" class="form-control" rows="10" cols="200" placeholder="Introduce la vida"></textarea>

                        </div>
                </div>
                <br>
                <input type="submit" style="float: left;"><br>
                <input type="reset" value="Reset" style="float: right;">

                </form>

                </div>    
                <?php 
                            }
        }
    }
}
