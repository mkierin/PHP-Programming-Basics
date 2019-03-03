<link rel="stylesheet" type="text/css" href="http://localhost:8000/table.css"></link>



<?php
$data = array(
	array(
		'company' => 'Manor',
		'id' => 1,
		'balance' => '-$2500'
	) ,
	array(
		'company' => 'Coop',
		'id' => 2,
		'balance' => '-$30000'
	) ,
	array(
		'company' => 'HP',
		'id' => 3,
		'balance' => '$4000'
	) ,
	array(
		'company' => 'Vifor',
		'id' => 4,
		'balance' => '$7000'
	)
);

function construct_table($data)
{

	# starting with table characteristics;

	$html = '<table style="width:100%" class="table-fill">';

	# building headers;

	$html.= '<tr>';
	foreach($data[0] as $key => $value) {
		$html.= '<th>' . $key . '</th>';
	}

	$html.= '</tr>';

	# building rows;

	foreach($data as $key => $value) {
		$html.= '<tr>';
		foreach($value as $key2 => $value2) {
			$html.= '<td><p>' . $value2 . '</p></td>';
		}

		$html .= '</tr>';
	}

	$html .= '</table>';
  #return the html code stored in $html string;

	return $html;
}

# using the the constructing table function and the information from the data array to populate table;

echo construct_table($data);
?>
