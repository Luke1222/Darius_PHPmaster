<?php
// Nustatome Zoną į Vilno
date_default_timezone_set('Europe/Vilnius'); ?>
<html>
    <!-- Pagrindinė puslapio antraštė -->
    <title><?php echo 'Php lydės ir' . ' ' . date(("Y/m/d"), strtotime('+' . rand(0,10) . 'year'));?></title> 
    <h2  style="background: rgb(<?php print rand(0, 255).",". rand(0,  255).",". rand(0, 255)?>)"> <?php echo 'Darius -' . ' '. "Galbūt turėsiu " . ' ' . rand(1,5) . ' ' . 'vaikų';?></h2>
    <!-- Body 2 -->
    <p style="font-size: <?php print rand(0, 255)?>"><?php echo  'D Trumpas nebebus prezidentu' . ' ' . date("Y/m/d", strtotime('+' . rand(0, 10) . 'year'));?></p>
</html>
<?php
// Galiu komentuoti kiek noriu
print "php ir aš"; // Galiu ir ne
/* ilgas komentaras
 * reikalas
 * rimtas
 */
?>
