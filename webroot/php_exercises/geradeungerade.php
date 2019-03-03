<?php
if( isset($_GET['submit']) )
{

    $number = htmlentities($_GET['val1']);



    $result = check($number);
    }


function check($number){
  if($number % 2 == 0){
    echo "gerade";
  }
  else{
    echo "ungerade";
  }}

?>

<form action="" method="get">
    Insert number:
    <input type="text" name="val1" id="val1"></input>

    <input type="submit" name="submit" value="send"></input>
    <p><?php if( isset($result) ) echo $result; ?></p>
</form>
