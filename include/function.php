<?php

function jsonFileToArray(string $filename){
	$string=file_get_contents($filename);
	return json_decode($string,true);
}

function arrayDump(array $value,?string $title=null):void{
	if($title!=null){
		echo "\n$title\n";
		echo "-----------------\n";;
	}
	foreach ($value as $element){
	foreach ($element as $name => $value) {
		echo "$name : $value\t";
	}
	echo "\n";
}
}
function loadAnddump(string $filename ):array{
 	$value=jsonFileToArray($filename);
 	arrayDump($value,basename($filename));
 	return $value;
}
function getEmployeesByService(array $employees, string $service):array{
	$results=[];
	foreach ($employees as $name) {
		if ($name['service'] == $service){
			$results[]=$name;
		} 
			
		
	}
	return $results;
}
function getSoftsByservice(array $service, )