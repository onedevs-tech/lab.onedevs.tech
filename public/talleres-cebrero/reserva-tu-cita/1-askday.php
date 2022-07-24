<?php

   \session_name('TalleresCebrero');
   \session_start();

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

   $meses = [
       1 => 'Ene',
       2 => 'Feb',
       3 => 'Marz',
       4 => 'Abr',
       5 => 'May',
       6 => 'Jun',
       7 => 'Jul',
       8 => 'Ago',
       9 => 'Sep',
      10 => 'Oct',
      11 => 'Nov',
      12 => 'Dic'
   ];

   $time_ahora = \time();
   $hoy = \date('Ymd', $time_ahora);
   $mes_actual = (int)\substr($hoy, 4, 2);
   $nombre_mes_actual = $meses[$mes_actual];
   $mes_sig = $mes_actual + 1;
      if ($mes_sig == 13) $mes_sig = 1;
   $nombre_mes_sig = $meses[$mes_sig];
   $mes_sig_sig = $mes_actual + 2;
      if ($mes_sig_sig == 13) $mes_sig_sig = 1;
      if ($mes_sig_sig == 14) $mes_sig_sig = 2;
   $nombre_mes_sig_sig = $meses[$mes_sig_sig];
   $mes_anterior = $mes_actual - 1; if ($mes_anterior == 0) $mes_anterior = 12;
   $año_actual = (int)\substr($hoy, 0, 4);
   $dia_actual = (int)\substr($hoy, 6, 2);
   $time_dia_actual = \mktime(0, 0, 0, $mes_actual-1, $dia_actual, $año_actual);

   $dias_vacation = [
      '20220815',
      '20220816',
      '20220817',
      '20220818',
      '20220819'
   ];

?>

<!-- ASK DAY -->

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

                  <div class="instructions">
                     En el calendario de abajo, selecciona el día en que quieres traernos el vehículo
                  </div>

                  <div style="height: 25px;"></div>

                  <div>
                     <table class="calendar" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <td colspan="7" class="month"><?= $nombre_mes_actual ?> - <?= $nombre_mes_sig ?> - <?= $nombre_mes_sig_sig ?> - <?= $año_actual ?></td>
                           </tr>
                           <tr>
                              <td class="weekday">L</td>
                              <td class="weekday">M</td>
                              <td class="weekday">X</td>
                              <td class="weekday">J</td>
                              <td class="weekday">V</td>
                              <td class="weekenddayname saturday">S</td>
                              <td class="weekenddayname">D</td>
                           </tr>
                        </thead>
                        <tbody>

                           <?php

                              $time_1er_dia_mes_actual = \mktime(0, 0, 0, $mes_actual, 1, $año_actual);
                              $dia_semana_1er_dia_mes_actual = ['D', 'L', 'M', 'X', 'J', 'V', 'S'][\date('w', $time_1er_dia_mes_actual)];
                              $resto = ((int)\date('N', $time_1er_dia_mes_actual) - 1) * 86400;
                              $time_1er_dia_loop = $time_1er_dia_mes_actual - $resto;

                              $time_dia_bucle = $time_1er_dia_loop;

                              $weeks_echoed = 0;
                           ?>

                           <?php while ($weeks_echoed < 12) : ?>

                           <?php

                              $dia_semana = ['D', 'L', 'M', 'X', 'J', 'V', 'S'][(int)\date('w', $time_dia_bucle)];

                              if ($dia_semana === 'L') {
                                 echo '<tr>';
                              }

                              $clases = '';

                              $dia_bucle = (int)\date('Ymd', $time_dia_bucle);

                              $mes_bucle = (int)\date('m', $time_dia_bucle);

                              if ($mes_bucle === $mes_actual) {
                                 $clases .= ' currentmonth';
                              }

                              if ($dia_bucle < (int)$hoy) {
                                 $clases .= ' pastday';
                              } elseif ($dia_bucle === (int)$hoy) {
                                 $clases .= ' currentday';
                              } else {
                                 if ($dia_semana != 'S' && $dia_semana != 'D') {
                                    $clases .= ' activeday';
                                 }
                              }
                              if ($dia_semana === 'S' || $dia_semana == 'D') {
                                 $clases .= ' weekendday';
                              }
                              if ($dia_semana === 'S') {
                                 $clases .= ' saturday';
                              }

                              if (\in_array($dia_bucle, $dias_vacation)) {
                                 $clases .= ' vacations';
                              }

                              $dia_mes = (int)\substr((string)$dia_bucle, 6, 2);

                              if ($dia_bucle < (int)$hoy) {
                                 $content = $dia_mes;
                              }
                              elseif ($dia_bucle === (int)$hoy) {
                                 $content = '<div class="currentday">' . $dia_mes . '</div>';
                              } else {
                                 if ($dia_semana === 'S' || $dia_semana == 'D' || \in_array($dia_bucle, $dias_vacation)) {
                                    $content = $dia_mes;
                                 } else {
                                    $content = '<div class="activeday"><a href="2-askhour.php?day=' . $dia_bucle . '">' . $dia_mes . '</a></div>';
                                 }
                              }

                              echo '<td class="' . $clases . '">' . $content . '</td>';

                              if ($dia_semana === 'D') {
                                 echo '</tr>';
                                 $weeks_echoed++;
                              }

                              $time_dia_bucle = $time_dia_bucle + 86400;

                           ?>

                           <?php endwhile; ?>

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
