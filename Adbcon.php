<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)->withServiceAccount('phocuzadmin-8f19f-firebase-adminsdk-d30k2-3a4adeb930.json')
->withDatabaseUri('https://phocuzadmin-8f19f-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>