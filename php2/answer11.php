<?php
ini_set('display_errors', 1);
$date1 = date_create('2012-11-04 05:04:00');
$date2 = new DateTime('2012-11-05 10:44:00', new DateTimeZone('IST'));
$date2->setTimezone(new DateTimeZone('GMT'));
// print_r($date2->format('Y-m-d H:i:s'));
$x=strtotime($date2->format('j F Y'));
$y=strtotime($date1->format('j F Y'));
$z=$x-$y;
echo date('j-m-Y H:i:s', $z);
?>