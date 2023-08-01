<?php

$uri = $_SERVER['REQUEST_URI'];

// Überprüfen, ob der API-Schlüssel im Request vorhanden ist
$receivedApiKey = $_GET['ApiKey'] ?? '';
$apiKey = 'ULF8MUIL4S44WCY8XA3YE6WVPH2BOPMD';
if (empty($receivedApiKey) || $receivedApiKey !== $apiKey) {
    // Fehler: Ungültiger oder fehlender API-Schlüssel
    header('HTTP/1.1 401 Unauthorized');
    echo "Ungültiger oder fehlender API-Schlüssel.";
    exit;
}

// Extrahiere den Endpunkt (z. B. ImportPurchaseRequest) aus der URL
$endpoint = ltrim(parse_url($uri, PHP_URL_PATH), '/');
$endpoint = rtrim($endpoint, '/');

switch ($endpoint) {
    case 'ImportPurchaseRequest':
        require_once("api/importPurchaseRequest.php");
        break;
    case 'ImportGoodsReceipt':
        require_once("api/importGoodsReceipt.php");
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo "404 Not Found";
        exit;
}

?>