<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/products', function (Request $request, Response $response) {
    global $productCollection;
    
    $products = $productCollection->find();
    $productsArray = [];

    foreach ($products as $product) {
        $productsArray[] = $product;
    }

    $response->getBody()->write(json_encode($productsArray));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/api/products/{id}', function (Request $request, Response $response, $args) {
    global $productCollection;

    $product = $productCollection->findOne(['_id' => new MongoDB\BSON\ObjectID($args['id'])]);

    $response->getBody()->write(json_encode($product));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->post('/api/products', function (Request $request, Response $response) {
    global $productCollection;

    $data = $request->getParsedBody();
    $insertResult = $productCollection->insertOne($data);

    $response->getBody()->write(json_encode($insertResult->getInsertedId()));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->put('/api/products/{id}', function (Request $request, Response $response, $args) {
    global $productCollection;

    $data = $request->getParsedBody();
    $updateResult = $productCollection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($args['id'])],
        ['$set' => $data]
    );

    $response->getBody()->write(json_encode($updateResult->getModifiedCount()));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->delete('/api/products/{id}', function (Request $request, Response $response, $args) {
    global $productCollection;

    $deleteResult = $productCollection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($args['id'])]);

    $response->getBody()->write(json_encode($deleteResult->getDeletedCount()));
    return $response->withHeader('Content-Type', 'application/json');
});

