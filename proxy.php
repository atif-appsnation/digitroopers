<?php
header("Content-Type: application/json");

// Category ID (default = 1 or any valid ID)
$category_id = $_GET['category'] ?? 1;

// WordPress API URL
$url = "https://blog.digitroopers.com/wp-json/wp/v2/posts?_embed&categories=" . intval($category_id);

// cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

echo $response;