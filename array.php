 
<?php
	$pessoas = array();

	array_push($pessoas, array(
		"nome" => "Gabi",
		"idade" => 19
	));

	array_push($pessoas, array(
		"nome" => "Amanda",
		"idade" => 18
	));

	//print_r($pessoas[0]['nome']);

	echo json_encode($pessoas);
?>