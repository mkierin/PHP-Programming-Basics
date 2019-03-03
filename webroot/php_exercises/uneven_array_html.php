<!-- Display html table row in php, but only the uneven array elements. -->

<?php

$list  = array(1,2,3,4,5,6,7,8,9,10 );
$length = count($list);


echo '<table style="width:100%">';

for ($i=0; $i < $length ; $i++) {
  if ($i % 2 == 0) {
    echo "<tr>";
    echo '<p>' . $list[$i] . '</p>';
    echo "</tr>";
  }
}
echo '</table>';

?>
