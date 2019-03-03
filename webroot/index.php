



<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://localhost:8000/form.css"></link>
</head>

<body>
<hgroup>
  <h1>PHP Programming projects </h1>
  <h3></h3>


  <?php
$pages = array(
	'app',
	'geradeungerade',
	'zahlen0to100',
	'durchschnittarray',
	'produktvonzahlen',
	'groesstezahl',
	'associative_array',
	'array_as_html',
	'calculator',
	'uneven_array_html',
  'associative_array_html'
);

foreach($pages as $value) {
	if ($value == 'app') {
		echo '<a href="http://localhost:8000/' . $value . '.php">' . $value . '</a><br />';
	}
	else {
		echo '<a href="http://localhost:8000/php_exercises/' . $value . '.php">' . $value . '</a><br />';
	}
} ?>
</hgroup>







<?php
echo "<br /><br />"; ?>
<?php
include 'php_exercises/geradeungerade.php';
 ?>


<footer>
</footer>
</body>
</html>
