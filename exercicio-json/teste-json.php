<?php
	$json = '[{"nome":"Gabi","idade":19},{"nome":"Amanda","idade":18}]';
	$data = json_decode($json, true);
	var_dump($data);
?> 
