<?php
include 'bomphd.php';

/*
    https://github.com/nee48/BomSmsPhD
    Made by Handika Pratama
    Modified by まやちゃん
    Modified Again by SecR00t
*/

$init = new Bom();

echo "Target Number (use country code): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Number of Messages: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
