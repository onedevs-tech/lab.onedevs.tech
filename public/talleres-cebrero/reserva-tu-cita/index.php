<?php

   \session_name('TalleresCebrero');
   \session_start();

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>


<!-- RESERVA TU CITA -->

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

                  <div class="info">
                     Mecánica<br />
                     Ruedas y neumáticos<br />
                     Climatización
                  </div>

                  <div style="height: 25px;"></div>

                  <!--

                  <div><img src="images/seat600-w250.png" alt="Talleres Cebrero" width="250" /></div>

                  <div style="height: 25px;"></div>

                  -->

                  <div>
                     <div class="btn-grad unselectable" onclick="window.location.assign('1-askday.php')">
                        Reserva<br />
                        aquí<br />
                        tu cita
                     </div>
                  </div>

                  <div style="height: 25px;"></div>

                  <div class="contact-data">
                     <a target="_blank" class="here" href="http://tallerescebrero.es">TALLERESCEBRERO.ES</a><br />
                     <br />
                     <a target="_blank" href="https://www.google.com/maps/place/Talleres+Cebrero/@37.8803743,-4.7668536,15z/data=!4m2!3m1!1s0x0:0xde675393a4015395?sa=X&ved=2ahUKEwjr1uu_-ob5AhWLx4UKHTdVDcMQ_BJ6BAgzEAU"><img align="absmiddle" src="images/icons/google-maps-w20.png" alt="Google Maps" width="20" /></a> <a target="_blank" class="here" href="https://www.google.com/maps/place/Talleres+Cebrero/@37.8803743,-4.7668536,15z/data=!4m2!3m1!1s0x0:0xde675393a4015395?sa=X&ved=2ahUKEwjr1uu_-ob5AhWLx4UKHTdVDcMQ_BJ6BAgzEAU">Cuesta de la Pólvora, 2-13</a><br />
                     14010 - Córdoba, España<br />
                     <br />
                     <a class="here" target="_blank" href="https://wa.me/34689510841"><img align="absmiddle" src="images/icons/whatsapp-w20.png" alt="WhatsApp" width="20" /></a>
                     &nbsp;
                     <a class="here" target="_blank" href="https://wa.me/34689510841">689 51 08 41</a>
                     <br />
                     <a class="here" target="_blank" href="tel:957751738"><img align="absmiddle" src="images/icons/phone-w20.png" alt="Phone" width="20" /></a>
                     &nbsp;
                     <a class="here" target="_blank" href="tel:957751738">957 75 17 38</a>
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
