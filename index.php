<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
error_reporting(E_ALL);
print '<pre>';

include (__DIR__.'/vendor/autoload.php');
use YeTii\RhymeGenerator\RhymeOpt;
use YeTii\RhymeGenerator\ApiClient;

$client = new ApiClient();
$client->setOpt(RhymeOpt::SPELLED_LIKE, 'elepant')->getWords();
print_r($client);

die();