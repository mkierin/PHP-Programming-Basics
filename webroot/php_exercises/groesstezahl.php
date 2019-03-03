<?php

$code = '<?php
$numbers  = array(5,1 ,2,4,5,15,7,9,10 );
$length = count($numbers);
$big = 0;

for ($i=0; $i < $length; $i++) {
  if ($numbers[$i] > $big ) {
    $big = $numbers[$i];
    }
}
?>

 <?php echo $big ?>';
 highlight_string($code);
 echo "<br><br>";


 ?>


 <br>
 <p>Grösste Zahl finden in einer Array</p>



<?php
$numbers  = array(5,1 ,2,4,5,15,7,9,10 );
$length = count($numbers);
$big = 0;

for ($i=0; $i < $length; $i++) {
  if ($numbers[$i] > $big ) {
    $big = $numbers[$i];
    }
}
?>

 <?php echo $big ?>
