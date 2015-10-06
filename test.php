<?php
/**
 * Created by PhpStorm.
 * User: lucif3r
 * Date: 2/10/15
 * Time: 3:03 PM
 */

$file = "src.php";
$fh = fopen($file, 'a');

$stringData = "<?php

class Src {
"
;
fwrite($fh, $stringData);
$stringData = $_POST['function'];
fwrite($fh, $stringData);
$stringData = "\n }";
fwrite($fh, $stringData);
fclose($fh);
//system('rm unittest.php');
echo system('phpunit unittest.php');
system('rm src.php');