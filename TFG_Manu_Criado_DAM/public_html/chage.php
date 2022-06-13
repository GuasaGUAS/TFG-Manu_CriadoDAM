<?php

include "funciones.php";

if (isset($_GET['valor']) && $_GET['valor'] !== null) {
    $valor = $_GET['valor'];
} else {
    $valor = -1;
}
if ($valor == 1) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $primera = $_POST["primera"];
    $salmo = $_POST["salmo"];
    $segunda = $_POST["Segunda"];
    $evangelio = $_POST["evangelio"];
    $insert_value = 'Insert into evangelio(fecha,primera,segunda,salmo,evangelio) Values("' . $Nfecha . '","' . $primera . '","' . $segunda . '","' . $salmo . "','" . $evangelio . '");';
    $ejec = mysqli_query($conexion, $insert_value);
    
}elseif ($valor == 2) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $invitatorio = $_POST["invitatorio"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $tercer_Salmo = $_POST["tercer_salmo"];
    $lectura = $_POST["lectura"];
    $l_patristica = $_POST["l_patristica"];
    $te_deum = $_POST["te_deum"];
    $insert_value = 'INSERT INTO "oficio" ("fecha", "dia", "invitatorio","himno","primer_salmo","segundo_salmo","tercer_salmo","lectura","l_patristica","te_deum") VALUES (  "' . $Nfecha . '","' . $dia . '"' . $invitatorio . '","' . $himno . '","' . $primer_salmo . '","' . $segundo_salmo . '", "' . $tercer_Salmo . '","' . $lectura . '","' . $l_patristica . '","' . $te_deum . '");';
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 3) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $invitatorio = $_POST["invitatorio"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $Cantico_at = $_POST["cantico_at"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $lectura = $_POST["lectura"];
    $cantico_evangelico = $_POST["cantico_evangelico"];
    $preces = $_POST["preces"];
    $insert_value = "INSERT INTO 'laudes'(fecha', 'dia', 'invitatorio', 'himno', 'primer_salmo', 'cantico_at', 'segundo_salmo', 'lectura', 'cantico_evangelico', 'preces') VALUES ('" . $Nfecha . "','" . $dia . "','" . $invitatorio . "','" . $himno . "','" . $primer_salmo . "','" . $Cantico_at . "','" . $segundo_salmo . "','" . $lectura . "','" . $cantico_evangelico . "','" . $preces . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 4) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $tercer_Salmo = $_POST["tercer_salmo"];
    $lectura = $_POST["lectura"];

    $insert_value = "INSERT INTO 'tercia'('fecha', 'dia', 'himno', 'primer_salmo', 'segundo_salmo', 'tercer_salmo', 'lectura') VALUES ('" . $Nfecha . "','" . $dia . "','" . $himno . "','" . $primer_salmo . "','" . $segundo_salmo . "','" . $tercer_Salmo . "','" . $lectura . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 5) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $tercer_Salmo = $_POST["tercer_salmo"];
    $lectura = $_POST["lectura"];

    $insert_value = "INSERT INTO 'sexta'('fecha', 'dia', 'himno', 'primer_salmo', 'segundo_salmo', 'tercer_salmo', 'lectura') VALUES ('" . $Nfecha . "','" . $dia . "','" . $himno . "','" . $primer_salmo . "','" . $segundo_salmo . "','" . $tercer_Salmo . "','" . $lectura . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 6) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $tercer_Salmo = $_POST["tercer_salmo"];
    $lectura = $_POST["lectura"];

    $insert_value = "INSERT INTO 'nona'('fecha', 'dia', 'himno', 'primer_salmo', 'segundo_salmo', 'tercer_salmo', 'lectura') VALUES ('" . $Nfecha . "','" . $dia . "','" . $himno . "','" . $primer_salmo . "','" . $segundo_salmo . "','" . $tercer_Salmo . "','" . $lectura . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 7) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $Cantico_at = $_POST["cantico_at"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $lectura = $_POST["lectura"];
    $cantico_evangelico = $_POST["cantico_evangelico"];
    $preces = $_POST["preces"];
    $insert_value = "INSERT INTO 'visperas'(fecha', 'dia', 'himno', 'primer_salmo', 'cantico_at', 'segundo_salmo', 'lectura', 'cantico_evangelico', 'preces') VALUES ('" . $Nfecha . "','" . $dia . "','" . $himno . "','" . $primer_salmo . "','" . $Cantico_at . "','" . $segundo_salmo . "','" . $lectura . "','" . $cantico_evangelico . "','" . $preces . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 8) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $dia = $_POST["dia"];
    $examen = $_POST["examen"];
    $himno = $_POST["himno"];
    $primer_salmo = $_POST["primer_salmo"];
    $segundo_salmo = $_POST["segundo_salmo"];
    $lectura = $_POST["lectura"];
    $cantico_evangelico = $_POST["cantico_evangelico"];
    $preces = $_POST["preces"];
    $insert_value = "INSERT INTO 'visperas'(fecha', 'dia', 'himno', 'examen','primer_salmo',  'segundo_salmo', 'lectura', 'cantico_evangelico', 'preces') VALUES ('" . $Nfecha . "','" . $dia . "','" . $examen . "','" . $himno . "','" . $primer_salmo . "','" . $segundo_salmo . "','" . $lectura . "','" . $cantico_evangelico . "','" . $preces . "');";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 9) {
    $nombre = $_POST["nombre"];
    $cancion = $_POST["cancion"];
    $insert_value = "INSERT INTO 'cancionero'('nombre', 'cancion') VALUES ('" . $nombre . "','" . $cancion . "')";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 10) {
    $fecha1 = $_POST["fecha"];
    $Nfecha = date("d/m/Y", strtotime($fecha1));
    $nombre = $_POST["nombre"];
    $vida = $_POST["vida"];
    $insert_value = "INSERT INTO 'santo'('fecha','nombre','vida') VALUES ('".$Nfecha."','".$nombre."','".$vida."')";
    $ejec = mysqli_query($conexion, $insert_value);
} elseif ($valor == 11) {
    $palabras=$_POST['palabrita'];
    $insert_value="INSERT INTO 'palabritas'('palabra') VALUES ('".$palabras."')";
     $ejec = mysqli_query($conexion, $insert_value);
}
        