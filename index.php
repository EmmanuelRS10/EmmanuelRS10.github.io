<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Página PHP</title>
    
    <!-- Agrega las referencias a los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php
    // Contenido PHP aquí
    $mensaje = "¡Hola, mundo desde PHP!";
    echo "<h1>$mensaje</h1>";
    
    // Más contenido después del mensaje
    echo "<p>Esta es una página web simple creada con PHP.</p>";
    echo "<p>Puedes agregar más texto, imágenes, enlaces, etc.</p>";
    
    // Configura la zona horaria a México
    date_default_timezone_set('America/Mexico_City');
    
    // Muestra la fecha y la hora actual
    $fecha = date("d/m/Y");
    $hora = date("H:i:s");
    echo "<p>Hoy es $fecha y son las $hora.</p>";
    
    // Agrega un enlace a rafaelgj.org
    echo "<p>Visita <a href='https://rafaelgj.org' target='_blank'>rafaelgj.org</a> para más información.</p>";
    echo "<p><a href='https://hosting-wolf.net' target='_blank'>Hosting</a></p>";
    
    //Alerta boostrap
    echo "<div class='alert alert-primary' role='alert'>A simple primary alert—check it out!</div>";
    
     // Muestra la fecha y la hora actual de México
    $fecha = date("d/m/Y");
    $hora = date("H:i:s");
    echo "<p class='lead'>Hoy es $fecha y son las $hora en México.</p>";

    // Muestra el temporizador hasta el fin de año 2023
    $finDeAno2023 = strtotime("31 December 2023 23:59:59");
    $tiempoRestante = $finDeAno2023 - time();

    $dias = floor($tiempoRestante / (60 * 60 * 24));
    $horas = floor(($tiempoRestante % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($tiempoRestante % (60 * 60)) / 60);
    $segundos = $tiempoRestante % 60;

    echo "<p class='lead'>Tiempo restante hasta el fin de año 2023: $dias días, $horas horas, $minutos minutos, $segundos segundos.</p>";


?>

<!-- Agrega la referencia al archivo JavaScript de Bootstrap al final del cuerpo para mejorar el rendimiento -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
