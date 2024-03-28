<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

$app = \Slim\Factory\AppFactory::create();

// MongoDB connection
$mongoClient = new MongoDB\Client(CONFIG['mongo_uri']);
$db = $mongoClient->marketplace;
$productCollection = $db->products;

// Define routes
require_once __DIR__ . '/src/routes/index.php';

$app->run();
