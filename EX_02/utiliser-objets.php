<?php
date_default_timezone_set("Europe/Paris");
$date1 = new DateTime();
echo "<p>" . $date1->format("d-m-Y H-i-s") . "</p>";
 
$date2 = new DateTime();
$date2->setDate(2020, 6, 22);
$date2-> setTime(9 , 0 , 0 , 0);
 
$interval = $date1->diff($date2);
echo $interval->format("%d Jours, %h Heures, %i Minutes");




