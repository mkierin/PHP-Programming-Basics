<?php

$code = '<?php
$total  = 0;
$number = 0;

while ($number < 100) {
    if ($number % 2 == 0) {
        $total = $total + $number;
    }
    $number++;
}


$total2 = 0;
for ($number = 0; $number < 100; $number += 2) {
    $total2 += $number;
}
echo $total2;
?>

<?php
echo $total;
?> <br>

  <?php
echo array_sum(range(0, 100, 2));
?>';

highlight_string($code);

?>


<?php
$total  = 0;
$number = 0;

while ($number < 100) {
    if ($number % 2 == 0) {
        $total = $total + $number;
    }
    $number++;
}



?>

<?php
echo $total;
?> <br>

  <?php
echo array_sum(range(0, 100, 2));
?>
