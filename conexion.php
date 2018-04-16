<?php 
function Conectarse() 
{ 
   $link=mysqli_connect("localhost","root","","reclutamientop");
   if (!($link)) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link,"reclutamientop")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>
