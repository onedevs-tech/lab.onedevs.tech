<?php

   \session_name('TalleresCebrero');
   \session_start();

   \date_default_timezone_set('Europe/Madrid');

   $_SESSION['phone'] = \trim($_GET['phone']);

   // escribimos en fichero temporal

   $line = \date('Y-m-d H:i:s') . ';' .
           $_SESSION['meeting'] . ';' .
           $_SESSION['name'] . ';' .
           $_SESSION['vehicle'] . ';' .
           $_SESSION['what'] . ';' .
           $_SESSION['phone'] . "\n";
   $file = '/var/www/lab.onedevs.tech/files/citas.txt';
   \file_put_contents($file, $line, \FILE_APPEND | \LOCK_EX);

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>

<!-- HOUR -->

<!DOCTYPE html>

<html lang="es">

   <head>
      
      <!-- TITLE -->

      <title>Talleres Cebrero - Cita</title>
      
      <!-- METAS -->

      <meta charset="utf-8">
      <meta name="author" content="OneDevs">
      <meta name="description" content="Talleres Cebrero - Reserva Tu Cita">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <meta property="og:title" content="Talleres Cebrero - Cita">
      <meta property="og:type" content="website">
      <meta property="og:description" content="Talleres Cebrero - Reserva Tu Cita">
      <meta property="og:url" content="https://onedevs.tech">
      <meta property="og:image" content="favicons/neumatico-negro-192x192.png">

      <!-- FAVICONS -->

      <link rel="icon" type="image/png" sizes="16x16"  href="favicons/neumatico-negro-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32"  href="favicons/neumatico-negro-32x32.png">
      <link rel="apple-touch-icon" sizes="57x57" href="favicons/neumatico-negro-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicons/neumatico-negro-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicons/neumatico-negro-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicons/neumatico-negro-76x76.png">
      <link rel="icon" type="image/png" sizes="96x96"  href="favicons/neumatico-negro-96x96.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicons/neumatico-negro-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicons/neumatico-negro-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicons/neumatico-negro-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicons/neumatico-negro-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicons/neumatico-negro-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicons/neumatico-negro-192x192.png">
      
      <!-- CSS -->

      <link rel="stylesheet" href="css/reserva-tu-cita.css?v=<?= $css_version ?>" />

      <!-- JS -->

      <script src="js/lib/jquery/jquery-3.6.0.min.js"></script>
            
   </head>

   <body>

      <table class="layout">
         <tbody>
            <tr>
               <td class="margin">
               </td>
            </tr>
            <tr>
               <td class="content">

                  <div>
                     <span class="talleres">TALLERES</span><br />
                     <span class="cebrero">CEBRERO</span>
                  </div>

                  <div style="height: 25px;"></div>

                  <div class="done">
                     ¡Cita reservada!<br />
                     <br />
                     En breve nos pondremos en contacto contigo para confirmar la cita.<br />
                     <br />
                     Lleva el vehículo el día y la hora confirmada <a target="_blank" class="here" href="https://www.google.com/maps/place/Talleres+Cebrero/@37.8803743,-4.7668536,15z/data=!4m2!3m1!1s0x0:0xde675393a4015395?sa=X&ved=2ahUKEwjr1uu_-ob5AhWLx4UKHTdVDcMQ_BJ6BAgzEAU">aquí</a><br />
                     <br />Gracias por confiar en<br />
                     <br />
                     <a target="_blank" class="here" href="http://tallerescebrero.es">TALLERES CEBRERO</a><br />
                  </div>

               </td>
            </tr>
            <tr>
               <td class="margin">
               </td>
            </tr>
         </tbody>
      </table>

   </body>

</html>
