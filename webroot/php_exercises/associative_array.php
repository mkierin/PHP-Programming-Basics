<?php

$code = '<?php
$people = array("Mike"=>"25.08.1975", "Sarah"=>"04.03.1995", "Jessica"=>"01.09.1988");


foreach($people as $x => $x_value) {
    echo "Das Geburtstag von " . $x . " ist am " . $x_value;
    echo "<br>";
} ?>';

highlight_string($code);
echo "<br><br>";

?>




<?php
$people = array("Mike"=>"25.08.1975", "Sarah"=>"04.03.1995", "Jessica"=>"01.09.1988");


foreach($people as $x => $x_value) {
    echo "Das Geburtstag von " . $x . " ist am " . $x_value;
    echo "<br>";
} ?>
