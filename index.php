// Here's how you could integrate the provided code snippet into your project, along with a commit message and description:


<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

use Slim\Factory\AppFactory;
use MongoDB\Client;

$app = AppFactory::create();

// MongoDB connection
$mongoClient = new Client(CONFIG['mongo_uri']);
$db = $mongoClient->marketplace;
$productCollection = $db->products;

// Define routes
require_once __DIR__ . '/src/routes/index.php';

$app->run();


