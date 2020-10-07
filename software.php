<?php
require_once("include/function.php");
const DATA_LOCATION='datas/';
echo "---------Gestion de liceence logiciel-------";

echo "\nListe des employés\n";


$employees =loadAnddump(DATA_LOCATION."employees.json");
loadAnddump(DATA_LOCATION."licenses.json");
loadAnddump(DATA_LOCATION."services.json");
loadAnddump(DATA_LOCATION."softs.json");

arrayDump(getEmployeesByService($employees,'compta'),'Liste des employer compta');