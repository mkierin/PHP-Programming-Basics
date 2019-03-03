<?php

$code = '<?php
$sum =0;
$numbers = array(10, 30, 40,30,50,6);
$length = count($numbers);



for ($i = 0; $i < $length; $i++) {
  $sum = $sum * $numbers[$i];
}
$average = $sum;

echo  $average;

 ?>';

highlight_string($code);

?>

<br><p>product of an array</p> <br>
<?php
$sum =1;
$numbers = array(10, 30, 40,30,50,6);
$length = count($numbers);



for ($i = 0; $i < $length; $i++) {
  $sum *= $numbers[$i];

}
 ?>
<?php
echo  $sum;?>
