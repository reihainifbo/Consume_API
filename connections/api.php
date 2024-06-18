<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$API_KEY = $_ENV['API_KEY'];
$URL = 'https://apiv3.apifootball.com/';
$league_Id = isset($league_Id) ? $league_Id : '';

$api = "$URL?action=get_standings&league_id=$league_Id&APIkey=$API_KEY";
$response = file_get_contents($api);
$data = json_decode($response, true);

?>