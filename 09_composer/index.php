<?php

require __DIR__ . "/vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    "verify" => __DIR__ . "/cacert.pem"
]);

$price = null;

try {

    $response = $client->request(
        "GET",
        "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd"
    );

    $body = $response->getBody();

    $data = json_decode($body);

    $price = $data->bitcoin->usd ?? null;

} catch (Exception $e) {

    error_log("API Error: " . $e->getMessage());

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Price</title>
</head>

<body>

    <h1>
        Bitcoin price in USD:
        <?php echo $price !== null ? $price : "Unavailable"; ?>
    </h1>

</body>

</html>