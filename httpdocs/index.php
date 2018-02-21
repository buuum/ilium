<?php
// Uncomment this line if you must temporarily take down your site for maintenance.
//require __DIR__ . '/.maintenance.php';

require __DIR__ . '/../vendor/autoload.php';

$app = new \Ilium\Ilium();
$app->dispatch();