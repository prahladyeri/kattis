<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%d', $k);
$stores = array();
for($i=0; $i<$k; $i++) {
	fscanf(STDIN, "%d %s", $j, $ss);
	if (!isset($stores[$j])) $stores[$j] = array();
	array_push($stores[$j], $ss);
}

fscanf(STDIN, '%d', $m); //no. of items purchased
for($i=0; $i<$m; $i++) {
	fscanf(STDIN, "%s", $ss);
}

print_r($stores);
