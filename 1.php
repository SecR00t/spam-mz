<?php
include 'func.php';

/*
    https://github.com/nee48/BomTelpSmsTokped
    Made by Handika Pratama
    Modified by SecR00t
*/

$init = new Bom();

//Sms Boomber (Limit 100x/Hour)

echo "Target Number: ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Example 0822xxxxxx

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
