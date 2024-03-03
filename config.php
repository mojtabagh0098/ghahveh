<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
define( "BASE_URL", "http://localhost/ghahveh" );
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
?>