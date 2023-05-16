<?php

$data = file_get_contents("https://covid19.geo-spatial.org/api/dashboard/getCasesByCounty");

print_r($data);

$decoded = json_decode($data);

echo '<pre>';
print_r($decoded->data->data);

$judete = $decoded->data->data;

foreach ($judete as $key => $judet) {
	
	
	echo $judet->county;
	echo '<br>';
	echo $judet->total_healed;
	echo '<br>';
}

?>