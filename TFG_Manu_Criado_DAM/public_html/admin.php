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
            
$hoy = getdate();
$diah=$hoy['mday'];
$mesh=$hoy['month'];
?>
               
		<!-- section title ends -->
		<div class="row " id="ini">
			<div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Laudes.php"><img class="d-flex" src="https://beadisciple.com/wp-content/uploads/2016/05/Jesus-Abba-2.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
                                      <h5 class="day"><?php echo $diah;?></h5>
				  	<span class="month"><?php echo $mesh;?></span>
				  </div>
				  <div class="media-body">
                                      <a href="Laudes.php"><h5 class="mt-0">Laudes</h5></a>
				   Oficio religioso diurno que se celebra al amanecer, después de maitines y antes que prima, y que constituye una de las horas canónicas.
                                    <a href="Laudes.php" class="post-link">Leer más</a>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Oficio.php"><img class="d-flex" src="imagenes/jesus-cr.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Oficio.php"><h5 class="mt-0">Oficios</h5></a>
				     es la hora más temprana del amanecer que servía de rezo en la Iglesia católica y en la Iglesia ortodoxa para la liturgia de las horas canónicas. 
                                    <a href="Oficio.php" class="post-link">Leer más</a>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Tercia.php"><img class="d-flex" src="https://wp.es.aleteia.org/wp-content/uploads/sites/7/2020/12/WEB3-JESUS-CHRIST-shutterstock_1467521624.jpg?w=620&h=348&crop=1" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Tercia.php"><h5 class="mt-0">Tercia</h5></a>
				    Oficio religioso diurno que se celebra hacia las nueve de la mañana, después de prima y antes que sexta, y que constituye una de las horas canónicas, la segunda de las horas menores.
                                    <a href="Tercia.php" class="post-link">Leer más</a>

				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Sexta.php"><img class="d-flex" src="https://assetsnffrgf-a.akamaihd.net/assets/m/502014285/univ/art/502014285_univ_lsr_md.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
				    <a href=""><h5 class="mt-0">Sexta </h5></a>
				   De donde deriva la palabra siesta: mediodía, a las 12:00 horas después del Ángelus en tiempo ordinario o el Regina Coeli en Pascua.
                                   <a href="Sexta.php" class="post-link">Leer más</a>
				
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Nona.php"><img class="d-flex" src="https://media.gq.com.mx/photos/5f53e61f4464f9b88fb26511/16:9/w_2560%2Cc_limit/recrean-el-verdadero-rostro-de-jesucristo-con-inteligencia-artificial-redes.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Nona.php"><h5 class="mt-0">Nona </h5></a>
				    Oficio religioso diurno que se celebra hacia las tres de la tarde, después de sexta y antes que vísperas, y que constituye una de las horas canónicas, la última de las cuatro horas menores.
                                    <a href="Nona.php" class="post-link">Leer más</a>
				    
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Nona.php"><img class="d-flex" src="https://i0.wp.com/tengoseddeti.org/wp-content/uploads/2011/10/corazones_jesus_maria-1.jpg?fit=795%2C464&ssl=1" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Completas.php"><h5 class="mt-0">Completas </h5></a>
				    Parte del oficio religioso que se celebra por la noche, después del de vísperas y antes de retirarse a dormir, y que constituye una de las horas canónicas.
                                    <a href="Completas.php" class="post-link">Leer más</a>
				   
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Lecturas.php"><img class="d-flex" src="https://soledadydescendimiento.es/wp-content/uploads/2016/11/cropped-Santa-Mar%C3%ADa-la-Mayor-8.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Lecturas.php"><h5 class="mt-0">Lecturas</h5></a>
				   Son las lecturas que había en la misa de hoy, para que puedas saber que toca y no has podido ir a misa
                                   <a href="Lecturas.php" class="post-link">Leer más</a>
				   
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Santo.php"><img class="d-flex" src="imagenes/primera.jpg" alt="Generic placeholder image"></a>
				  <div class="circle">
  				  	<h5 class="day"><?php echo $diah;?></h5>
  				  	<span class="month"><?php echo $mesh;?></span>
  				  </div>
				  <div class="media-body">
                                      <a href="Santo.php"><h5 class="mt-0">Santo de hoy </h5></a>
				    Aquí te explicamos la vida del Santo de hoy, su vida, experiencias para que te puedas volver tan Saton con ellos
                                    <a href="Santo.php" class="post-link">Leer más</a>
				   
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="Cancionero.php"><img class="d-flex" src="imagenes/musica.jpg" alt="Generic placeholder image"></a>
			
				  <div class="media-body">
				    <a href=""><h5 class="mt-0">Cancionero </h5></a>
				    Canciones religiosas de todo tipo, animadas, para misa, tranquilas y mucho más
                                    <a href="Cancionero.php" class="post-link">Leer más</a>
				    
				  </div>
				</div>
			</div>
                    <div class="col-md-6">
				<div class="media blog-media">
                                    <a href="palabritas.php"><img class="d-flex" src="https://es.churchpop.com/wp-content/uploads/2015/10/Jesus-puerta-1280x720.jpg" alt="Generic placeholder image"></a>

				  <div class="media-body">
                                      <a href="palabritas.php"><h5 class="mt-0">Palabritas de vida </h5></a>
				    Te saldra una frase de la biblia, esto te ayudara a ver tu dia y lo que el Señor quiere de ti
                                    <a href="palabritas.php" class="post-link">Leer más</a>
				    
				  </div>
				</div>
			</div>
		</div>
        </div>

    </body>    
    </html>
    <?php
}