<?php
require_once "vendor/autoload.php";

$client_conn = new MongoDB\Client;

$db = $client_conn->dbname;

?>