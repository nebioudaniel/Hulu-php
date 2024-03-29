<?php

class PayloadDataFetcher {
    public function fetchProducts() {
        $url = 'https://your-payload-cms-api.com/api/products';
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}

// Example usage:
// $payloadFetcher = new PayloadDataFetcher();
// $products = $payloadFetcher->fetchProducts();
// var_dump($products);
