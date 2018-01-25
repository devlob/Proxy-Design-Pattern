<?php

require_once("../vendor/autoload.php");

use DesignPatterns\Structural\Proxy\ProxyFile;

$image = new ProxyFile('test.txt');
$image->display();

echo '<br><br>File already loaded from disk before, thus just display it now!<br>';

$image->display();