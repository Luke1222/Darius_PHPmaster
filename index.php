<html>
   <head>
       <style>
           .kvadratas {
               position: absolute;
               border: 10px solid black;
               height: 100px;
               width: 100px;
               left: 1500px;
               top: <?php print rand(0,537);?>px;
               left: <?php print rand(0,1246);?>px;

       </style>
   </head>
   <body style="background-color: rgb(<?php print rand(0,255).",".rand(0,255).",".rand(0,255);?>)">
       <div class="kvadratas">
            </div>

   </body>
</html>

<?php
// Nustatome Zoną į Vilno
date_default_timezone_set('Europe/Vilnius'); ?>
<html>
    <img src="Images\3.png" alt="dice" height="42" width="42">
</html>
<html>
    <img src=
    <!-- Pagrindinė puslapio antraštė -->
    <title><?php echo 'Php lydės ir' . ' ' . date(("Y/m/d"), strtotime('+' . rand(0,10) . 'year'));?></title> 
    <h2  style="background: rgb(<?php print rand(0, 255).",". rand(0,  255).",". rand(0, 255)?>)"> <?php echo 'Darius -' . ' '. "Galbūt turėsiu " . ' ' . rand(1,5) . ' ' . 'vaikų';?></h2>
    <!-- Body 2 -->
    <p style="font-size: <?php print rand(0, 255)?>"><?php echo  'D Trumpas nebebus prezidentu' . ' ' . date("Y/m/d", strtotime('+' . rand(0, 30) . 'year'));?></p>
</html>
<?php
// Galiu komentuoti kiek noriu
print "php ir aš"; // Galiu ir ne
/* ilgas komentaras
 * reikalas
 * rimtas
 */
?>
<?php 
$x = 10;
print "Mano amžius: $x";

?>