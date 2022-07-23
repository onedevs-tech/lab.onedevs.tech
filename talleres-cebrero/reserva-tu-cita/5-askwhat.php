<?php

   \session_name('TalleresCebrero');
   \session_start();

   $_SESSION['vehicle'] = \trim($_GET['vehicle']);

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>

<!-- WHAT -->

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

                  <div>
                     <table class="calendar" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <td class="month meeting"><?= $_SESSION['meeting'] ?></td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="activeday"><input type="text" name="what" class="input" placeholder="Qué le ocurre al vehículo" /></td>
                           </tr>
                           <tr>
                              <td class="activeday"><input id="submit" type="button" class="btn-assign" value="Continúa" /></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

               </td>
            </tr>
            <tr>
               <td class="margin">
               </td>
            </tr>
         </tbody>
      </table>

      <script>
         $(document).ready(function(){
            $('#submit').click(function(e){
               if ($('input[name="what"]').first().val().length == 0) {
                  setTimeout(function(){
                     $('input[name="what"]').first().addClass('input-cebrero');
                  }, 0);
                  setTimeout(function(){
                     $('input[name="what"]').first().removeClass('input-cebrero');
                  }, 150);
                  setTimeout(function(){
                     $('input[name="what"]').first().addClass('input-cebrero');
                  }, 300);
                  setTimeout(function(){
                     $('input[name="what"]').first().removeClass('input-cebrero');
                  }, 450);
               } else {
                  window.location.assign('6-askphone.php?what=' + $('input[name="what"]').first().val());
               }
            });
         });
      </script>

   </body>

</html>
