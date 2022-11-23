<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;


$factory = (new Factory)->withServiceAccount('phucosapp-firebase-adminsdk-k82fu-f91302fa3a.json')
->withDatabaseUri('https://phucosapp-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();


?>