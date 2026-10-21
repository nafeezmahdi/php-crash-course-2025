<?php


require __DIR__ . "/vendor/autoload.php";
// use User\Testing\MyApp;

use GuzzleHttp\Client;

$client = new Client([
    "verify" => __DIR__ . "/cacert.pem"
]);

try {

    $response = $client->request(
        "GET",
        "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd"
    );

    $body = $response->getBody();

    $data = json_decode($body);

    echo "Bitcoin price in USD: " . $data->bitcoin->usd;

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}

// $app = new MyApp();
// $app->run();


?>