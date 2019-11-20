<?php 

$vrienden = readline("wees eerlijk je hebt geen vrienden");

if (is_numeric($vrienden)) {
	echo " ";
}else exit("je zuigt"); 

$arraytest = array();

for ($i=0; $i < $vrienden ; $i++) { 
	$naam = readline("noem een naam" . PHP_EOL);
    $droom = readline("noem een random droom" . PHP_EOL);
    array_push($arraytest, array(
    	"naam" => $naam,
    	"droom" => $droom
    ));
}

foreach ($arraytest as $vriend) {
	echo($vriend['naam'] . ' ' . $vriend['droom']);
};
 ?>