<?php 

   $link = mysqli_connect ("localhost", "root", "") or die("Neuspesno konektovanje!");
   mysqli_set_charset($link,'utf8');
   mysqli_select_db ($link,"car_rental") or die("Nedostupna baza podataka HR test!");
   $car_rental="car_rental";

?>