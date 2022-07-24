<?php

   \session_name('TalleresCebrero');
   \session_start();

   \date_default_timezone_set('Europe/Madrid');

   $day = $_GET['day'];

   $year = \substr($day, 0, 4);
   $month = \substr($day, 4, 2);
   $day = \substr($day, 6, 2);

   $time = \mktime(0, 0, 0, $month, $day, $year);

   $weekdays = [
      'Domingo',
      'Lunes',
      'Martes',
      'Miércoles',
      'Jueves',
      'Viernes',
      'Sábado'
   ];

   $months = [
      'Enero',
      'Febrero',
      'Marzo',
      'Abril',
      'Mayo',
      'Junio',
      'Julio',
      'Agosto',
      'Septiembre',
      'Octubre',
      'Noviembre',
      'Diciembre'
   ];

   $weekday_fmt = $weekdays[\date('w', $time)];
   $day_fmt = \date('j', $time);
   $month_fmt = $months[\date('n', $time)-1];
   $year_fmt = \date('Y', $time);

   $date_fmt = $weekday_fmt . ' ' . $day_fmt . ' ' . $month_fmt . ' ' . $year_fmt;

   $_SESSION['date_fmt'] = $date_fmt;

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>

<!-- GET HOUR -->

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

                  <div class="contact-data">
                     Horario de taller:<br />
                     de 8.00 a 15.30
                  </div>

                  <div class="instructions">
                     En el cuadro de abajo, selecciona la hora en la que estarás en el taller
                  </div>

                  <div style="height: 25px;"></div>

                  <div>
                     <table class="calendar" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <td colspan="4" class="header"><?= $date_fmt ?></td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0800">8:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0815">8:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0830">8:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0845">8:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0900">9:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0915">9:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0930">9:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=0945">9:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1000">10:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1015">10:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1030">10:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1045">10:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1100">11:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1115">11:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1130">11:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1145">11:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1200">12:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1215">12:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1230">12:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1245">12:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1300">13:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1315">13:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1330">13:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1345">13:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1400">14:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1415">14:15<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1430">14:30<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1445">14:45<a/></div></td>
                           </tr>
                           <tr>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1500">15:00<a/></div></td>
                              <td class="activeday"><div class="activeday"><a href="3-askname.php?hour=1515">15:15<a/></div></td>
                              <td class="activeday"></td>
                              <td class="activeday"></td>
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

   </body>

</html>
